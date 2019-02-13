<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;
class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // todo forms
        Form::component('bsText', 'components.form.text', ['name', 'value' => null, 'attributes' => []]);
        Form::component('bsTextArea', 'components.form.textarea', ['name', 'value' => null, 'attributes' => []]);
        Form::component('bsSubmit', 'components.form.submit', ['value' => 'submit', 'attributes' => []]);
        Form::component('hidden', 'components.form.hidden', ['name', 'value' => null, 'attributes' => []]);
        // gallery forms
        Form::component('Text', 'components.form.text', ['name', 'value' => null, 'attributes' => []]);
        Form::component('TextArea', 'components.form.textarea', ['name', 'value' => null, 'attributes' => []]);
        Form::component('bsSubmit', 'components.form.submit', ['value' => 'submit', 'attributes' => []]);
        Form::component('hidden', 'components.form.hidden', ['name', 'value' => null, 'attributes' => []]);
        Form::component('file', 'components.form.file', ['name', 'attributes' => []]);


    }

}