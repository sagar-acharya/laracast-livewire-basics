<?php

namespace App\Livewire\Forms;

use Livewire\Component;

class ContactForm extends Component
{
    public $email;
    public $password;
    public $successMessage;
    public $rules = ['email' => 'required|email','password' => 'required|min:5'];

    public function submitForm()
    {
        $data = $this->validate($this->rules);
        $this->resetForm();
    }

    public function resetForm()
    {
        $this->email = '';
        $this->password = '';
    }

    public function render()
    {
        return view('livewire.forms.contact-form');
    }
}
