<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class InspectionForm extends Form
{
    public function buildForm()
    {
        // Add fields here...
        $this             
        ->add('name', 'text', [
            'rules' => 'required|min:5'
            ])
        ->add('lyrics', 'textarea', [
            'rules' => 'max:5000'
            ])
        ->add('publish', 'checkbox'); 
    }
}
