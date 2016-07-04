<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-ckeditor')
                            ->usePackage('larakit/sf-ckeditor')
                            ->ngModule('ngCkeditor')
                            ->js('//cdnjs.cloudflare.com/ajax/libs/ng-ckeditor/0.2.1/ng-ckeditor.min.js');
