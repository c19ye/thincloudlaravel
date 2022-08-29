<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Myplan;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\OperatingSystem;
use App\Models\VirtualMachines;
use Illuminate\Validation\Rule;

class VirtualMachineController extends Controller
{
    public function show()
    {
        $virtualmachinemodel = VirtualMachines::where('user_id', '=', auth()->user()->id)->get();
        $virtualmachinenoti = VirtualMachines::where('user_id', '=', auth()->user()->id)->first();
        $myplanmodel = Myplan::get();
        $operatingsystemmodel = OperatingSystem::get();
        $departments = Department::where('user_id', auth()->user()->id)->get();

        return view('pages.virtualmachines', compact('virtualmachinemodel', "virtualmachinenoti",'myplanmodel', 'operatingsystemmodel', 'departments'));
    }

    public function create(Request $request)
    {
        $formFields = $request->validate([

            'thincloudname' => ['required', 'min:3', Rule::unique('virtual_machines', 'thincloudname')->where("user_id",auth()->user()->id)],
            'thincloudid' => ['required', 'min:3', Rule::unique('virtual_machines', 'thincloudid')->where("user_id",auth()->user()->id)],
            'name' => ['required', 'min:3'],
            'surname' => ['required', 'min:3'],
            'username' => ['required', 'min:3'],
            'location' => ['required', 'min:3'],
            'password' => ['required', 'min:8'],
            'email' => ['required', 'min:3', 'email', Rule::unique('virtual_machines', 'email')],

            'my_plans_id' => 'required',
            'operating_system_id' => 'required',
        ],
            [
                'thincloudname.required' => 'Thincloud Adını Girin',
                'thincloudname.min' => 'Minimum 3 Karakterden Oluşmalıdır',
                'thincloudname.unique' => 'Böyle Bir Thincloud İsmi Mevcut',

                'thincloudid.required' => 'Thincloud ID Girin',
                'thincloudid.min' => 'Minimum 3 Karakterden Oluşmalıdır',
                'thincloudid.unique' => 'Böyle Bir Thincloud ID Mevcut',

                'name.required' => 'Adınızı Girin',
                'name.min' => 'İsminiz Minimum 3 Karakterden Oluşmalıdır',

                'surname.required' => 'Soyadınızı Girin',
                'surname.min' => 'Soyadınız Minimum 3 Karakterden Oluşmalıdır',

                'username.required' => 'Kullanıcı Adınızı Girin',
                'username.min' => 'Kullanıcı Adınız Minimum 3 Karakterden Oluşmalıdır',

                'location.required' => 'Konumu Girin',
                'location.min' => 'Konum Minimum 3 Karakterden Oluşmalıdır',

                'password.required' => 'Parolanızı Girin',
                'password.min' => 'Parolanız Minimum 8 Karakterden Oluşmalıdır',

                'email.required' => 'E-Postanızı Girin',
                'email.unique' => 'Böyle Bir E-Posta Mevcut',
                'email.min' => 'E-Postanız Minimum 3 Karakterden Oluşmalıdır',
                'email.email' => 'Geçersiz E-Posta',

                'operating_system_id.required' => 'İşletim Sistemi Seçin',

                'my_plans_id.required' => 'Plan Seçin',

            ]);

        $formFields['password'] = bcrypt($formFields['password']);
        $formFields['user_id'] = auth()->user()->id;
        $formFields['department_id'] = $request->department_id;
        $formFields['my_plans_id'] = $request->my_plans_id;
        $formFields['operating_system_id'] = $request->operating_system_id;
        $formFields['auto_shutdown'] = 0;
        $formFields['auto_turnon'] = 0;
        $formFields['critical_notification'] = 0;
        $formFields['thincloudid'] = 'T'.$request->thincloudid;
        $formFields['started_date'] = Carbon::now()->format('Y-m-d');
        $formFields['end_date'] = Carbon::now()->addDay(30)->format('Y-m-d');
        VirtualMachines::create($formFields);

        return redirect('/mynetwork/virtualmachines')->withSuccess("ThinCloud Başarıyla Oluşturuldu.");
    }

    public function update(Request $request)
    {
        $input = array_filter(request()->except(['_token']));

        VirtualMachines::where('id', $request->id)->update($input);

        return redirect('/mynetwork/virtualmachines');
    }

    public function notifications(Request $request)
    {
        VirtualMachines::where('user_id', '=', auth()->user()->id)->update([
            'auto_shutdown' => $request->auto_shutdown,
            'auto_turnon' => $request->auto_turnon,
            'critical_notification' => $request->critical_notification,
        ]);
    }
}
