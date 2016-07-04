<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-ckeditor')
                            ->ngModule('ngCkeditor')
                            ->usePackage('larakit/sf-ckeditor')
                            ->js('//cdnjs.cloudflare.com/ajax/libs/ng-ckeditor/0.2.1/ng-ckeditor.min.js');
