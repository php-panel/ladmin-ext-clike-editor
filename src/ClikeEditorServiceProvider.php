<?php

namespace Ladmin\ClikeEditor;

use Ladmin\Admin;
use Ladmin\Form;
use Illuminate\Support\ServiceProvider;

class ClikeEditorServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        if (!ClikeEditor::boot()) {
            return;
        }

        Admin::booting(function () {
            Form::extend('clang', Clang::class);
            Form::extend('cpp', Cpp::class);
            Form::extend('csharp', Csharp::class);
            Form::extend('java', Java::class);
            Form::extend('objectivec', Objectivec::class);
            Form::extend('scala', Scala::class);
            Form::extend('kotlin', Kotlin::class);
            Form::extend('ceylon', Ceylon::class);
        });
    }
}
