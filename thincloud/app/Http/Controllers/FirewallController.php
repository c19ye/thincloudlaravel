<?php

namespace App\Http\Controllers;

use App\Models\Firewall;
use App\Models\Department;
use App\Models\VirtualMachines; 
use App\Models\Ports;
use App\Models\FirewallDepartment;
use App\Models\FirewallVm;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class FirewallController extends Controller
{
    public function showpage()
    {

        $departman = Department::where('user_id', auth()->user()->id)->get();
        $virtual = VirtualMachines::where('user_id', auth()->user()->id)->get();
        $ports = Ports::where('user_id', auth()->user()->id)->get();
        $firewall = Firewall::where('user_id', auth()->user()->id)->get();
        $fireDepart = FirewallDepartment::get();
        $fireVm = FirewallVm::get();

        return view('pages.firewall', compact('departman', 'virtual', 'ports', 'firewall', 'fireDepart', 'fireVm'));
    }

    public function create_rule(Request $request){
        $formFields = $request->validate([
            'rule_name' => ['required', Rule::unique('firewall', 'rule_name')],
            'rule_actions' => ['required'],
            'virtuals' => ['required'],
            'departmans' => ['required'],
            'rule_validity' => ['required']
        ],
        [
            "rule_name.required" => "Lütfen kural ismi giriniz",
            "rule_name.unique" => "Böyle bir kural adı mevcut",
            "rule_actions.required" => "En az bir kural aksiyonu seçmelisiniz",
            "virtuals.required" => "En az bir sanal makine seçmelisiniz",
            "departmans.required" => "En az bir departman seçmelisiniz",
            "rule_validity" => "Lütfen kural geçerliliğini seçiniz"
        ]);
        
        $firewall = new Firewall;
        $firewall->user_id = auth()->user()->id;
        $firewall->rule_name = $request->rule_name;
        $firewall->state = 1;
        $serializedActions = serialize($request->rule_actions);
        $firewall->rule_actions = $request->rule_actions;
        $firewall->url = $request->url;
        $firewall->rule_validity = $request->rule_validity;
        $firewall->force_rules = 0;
        $firewall->auto_update = 0;
        $firewall->critical_notification = 0;

        $firewall->save();

        foreach($request->virtuals as $virtual){
            DB::table('firewall_vm')->insert([
                'thincloud_id' => $virtual,
                'firewall_id' => $firewall->id,
            ]);
        }

        foreach($request->departmans as $departman){
            DB::table('firewall_department')->insert([
                'department_id' => $departman,
                'firewall_id' => $firewall->id,
            ]);
        }

        
        return redirect('/mynetwork/firewall')->with('success', 'Güvenlik kuralı başarıyla oluşturuldu!');
    }

    public function open_ports(Request $request){
        $formFields = $request->validate([
            'network_name' => ['required', 'min:3'],
            'port_name' => ['required'],
            'port_state' => ['required'],
            'port_number' => ['required', 'integer', 'digits_between:4,5']
        ],
        [
            "network_name.required" => "Ağa bir isim vermelisiniz",
            "network_name.min" => "Vereceğiniz isim en az 3 karakterden oluşmalıdır",
            "port_name.required" => "Lütfen port adını giriniz",
            "port_state.required" => "En az bir seçim yapmalısınız",
            "port_number.required" => "Lütfen port numarasını giriniz",
            "port_number.integer" => "Port numarası sayısal bir ifade olmalıdır",
            "port_number.digits" => "Port numarası 4 karakterden oluşmalıdır",
        ]);

        $port = new Ports;
        $port->user_id = auth()->user()->id;
        $port->network_name = $request->network_name;
        $port->port_name = $request->port_name;
        $port->port_state = $request->port_state;
        $port->port_number = $request->port_number;

        $port->save();

        return redirect('/mynetwork/firewall')->with('success', 'Port başarıyla oluşturuldu!');
    }

    //düzenlenecek
    public function update(Request $request){
        $firewall = Firewall::where("id", $request->id)->first();

        $departmans = FirewallDepartment::where('firewall_id', $firewall->id)->get();

        foreach($departmans as $dep){
            if($request->select_departman == $dep->id){
                return back()->withErrors(['select_departman' => 'Bu departman zaten kayıtlı!'])->onlyInput('select_departman');
            }
        }

        $actions = $firewall->rule_actions;

        array_push($actions, $request->add_rules);

        DB::table('firewall_department')->insert([
            'department_id' => $request->select_departman,
            'firewall_id' => $firewall->id
        ]);

        $firewall->state = $request->select_state;
        $firewall->rule_actions = $actions;

        $firewall->save();

        return redirect('mynetwork/firewall');
    }

    public function update_ports(Request $request){
        $port = Ports::find($request->id);

        $port->port_number = $request->port_number;
        $port->port_state = $request->select_state;
        $port->save();
        
        return redirect('/mynetwork/firewall')->with('success', 'Başarıyla güncellendi');
    }

    public function notification(Request $request){
        Firewall::where('user_id', '=', auth()->user()->id)->update([
            'force_rules' => $request->force_rules,
            'auto_update' => $request->auto_update,
            'critical_notification' => $request->critical_notification,
        ]);
    }
}
