<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-ckeditor')
    ->ngModule('ngCkeditor')
    ->usePackage('larakit/sf-ckeditor')
    ->usePackage('larakit/ng-larakit')
    ->setSourceDir('public')
    ->jsPackage('ng-ckeditor.min.js')
    ->cssPackage('ng-ckeditor.css');
