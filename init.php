<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-ckeditor')
    ->usePackage('larakit/sf-ckeditor')
    ->setSourceDir('public')
    ->jsPackage('angular-ckeditor.js');
\Larakit\LkNgModule::register('ckeditor');