<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-ckeditor')
    ->usePackage('larakit/sf-ckeditor')
    ->usePackage('larakit/sf-angular')
    ->setSourceDir('public')
    ->jsPackage('angular-ckeditor.js');
\Larakit\LkNgModule::register('ckeditor');