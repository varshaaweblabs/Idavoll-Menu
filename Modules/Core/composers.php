<?php

View::creator('core::partials.sidebar-nav', 'Modules\Core\Composers\SidebarViewCreator');
View::composer('core::layouts.master', 'Modules\Core\Composers\MasterViewComposer');
View::composer('core::fields.select-theme', 'Modules\Core\Composers\ThemeComposer');
View::composer('*', 'Modules\Core\Composers\LocaleComposer');