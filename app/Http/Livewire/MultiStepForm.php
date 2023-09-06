<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;

class MultiStepForm extends Component {
    // first step fields
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $gender;
    public $age;
    public $address;
    
    // second step fields
    public $degree;
    public $college;
    public $passout_year;
    public $score;

    // third step fields
    public $current_employer;
    public $job_profile;
    public $notice_peroid;
    public $salary;

    public $total_steps = 4;
    public $current_step = 1;

    public function mount() {
        $this->current_step = 1;
    }
    public function decreaseStep() {
        $this->resetErrorBag();
        $this->current_step--;        
        if ($this->current_step < 1) {
            $this->current_step = 1;
        }
    }
    public function increaseStep() {
        $this->resetErrorBag();
        $this->validate_data();
        $this->current_step++;
        if ($this->current_step > $this->total_steps) {
            $this->current_step = $this->total_steps;
        }
    }
    public function validate_data() {
        if ($this->current_step == 1) {
            $this->validate([
                'first_name' => "required|string",
                'last_name' => "required|string",
                'email' => "required",
                'phone' => "required|digits:10",
                'gender' => "required",
                'age' => "required|digits:2",
                'address' => "required|string",
            ]);
        } else if ($this->current_step == 2) {
            $this->validate([
                'degree' => "required|string",
                'college' => "required|string",
                'passout_year' => "required|digits:4",
                'score' => "required",
            ]);
        } else if ($this->current_step == 3) {
            $this->validate([
                'current_employer' => "required|string",
                'job_profile' => "required|string",
                'notice_peroid' => "required|digits:2",
                'salary' => "required",
            ]);
        }
    }
    public function register() {
        $this->resetErrorBag();
        // dd("now you can submit");
        $emp_data = array(
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'gender' => $this->gender,
            'age' => $this->age,
            'address' => $this->address,
            'degree' => $this->degree,
            'college' => $this->college,
            'passout_year' => $this->passout_year,
            'score' => $this->score,
            'current_employer' =>  $this->current_employer,
            'job_profile' =>  $this->job_profile,
            'notice_peroid' =>  $this->notice_peroid,
            'salary' => $this->salary
        );
        Employee::insert($emp_data);
        $data = ['name' => $this->first_name.' '.$this->last_name];
        return redirect()->route('registration.success', $data);
    }
    public function render() {
        return view('livewire.multi-step-form');
    }
}
