(function ($, api) {

    // Customizer fof page redirect
    api.section('br_fof_section', function (section) {

        section.expanded.bind(function (isExpanded) {

            if (isExpanded) {
                api.previewer.previewUrl.set(api.settings.url.home + '/maybe404page');
            } else {
                api.previewer.previewUrl.set(api.settings.url.home);
            }

        })

    });

    // Customizer blog page redirect
    api.section('br_blog_options_section', function (section) {

        section.expanded.bind(function (isExpanded) {

            if (isExpanded) {
                api.previewer.previewUrl.set(moahCustomizerdata.blog_page);
            } else {
                api.previewer.previewUrl.set(api.settings.url.home);
            }



        })

    });

    // General section
    api.section('br_general_options_section', function (section) {

        section.expanded.bind(function (isExpanded) {


            // Preloader option show/hide

            var $preloader = $('#br-preloader-toggle-settings'),
                $preloaderbg = $('#customize-control-br_preloaderbgcolor'),
                $preloaderbordercolor = $('#customize-control-br_loaderbordcolor'),
                $preloaderactivebordercolor = $('#customize-control-br_loaderbordactivecolor');


            // Default

            if ($preloader.is(':checked')) {
                $preloaderbg.show('slow');
                $preloaderbordercolor.show('slow');
                $preloaderactivebordercolor.show('slow');
            } else {
                $preloaderbg.hide('slow');
                $preloaderbordercolor.hide('slow');
                $preloaderactivebordercolor.hide('slow');
            }


            // on click
            $preloader.on('click', function () {

                var $this = $(this);

                if ($this.is(':checked')) {
                    $preloaderbg.show('slow');
                    $preloaderbordercolor.show('slow');
                    $preloaderactivebordercolor.show('slow');
                } else {
                    $preloaderbg.hide('slow');
                    $preloaderbordercolor.hide('slow');
                    $preloaderactivebordercolor.hide('slow');
                }


            });

        });


    });

    // Footer section
    api.section('br_footer_options_section', function (section) {

        section.expanded.bind(function (isExpanded) {


            // Footer Widget option show/hide
            var $widget_toggle = $('#br-widget-toggle-settings'),
                $widgetbg = $('#customize-control-br_footer_bgColor_settings'),
                $widgettext = $('#customize-control-br_footer_wtcolor_settings'),
                $widgettitle = $('#customize-control-br_footer_widgettitlecolor_settings'),
                $widgetanchor = $('#customize-control-br_footer_wanchorcolor_settings'),
                $widgetanchorhover = $('#customize-control-br_footer_wanchorhovcolor_settings');


            // Default

            if ($widget_toggle.is(':checked')) {
                $widgetbg.show('slow');
                $widgettext.show('slow');
                $widgettitle.show('slow');
                $widgetanchor.show('slow');
                $widgetanchorhover.show('slow');
            } else {
                $widgetbg.hide('slow');
                $widgettext.hide('slow');
                $widgettitle.hide('slow');
                $widgetanchor.hide('slow');
                $widgetanchorhover.hide('slow');
            }

            // on click
            $widget_toggle.on('click', function () {

                var $this = $(this);

                if ($this.is(':checked')) {

                    $widgetbg.show('slow');
                    $widgettext.show('slow');
                    $widgettitle.show('slow');
                    $widgetanchor.show('slow');
                    $widgetanchorhover.show('slow');
                } else {

                    $widgetbg.hide('slow');
                    $widgettext.hide('slow');
                    $widgettitle.hide('slow');
                    $widgetanchor.hide('slow');
                    $widgetanchorhover.hide('slow');
                }


            });

            /**
             * Footer bottom social media option show/hide
             *
             */

            var $social_toggle = $('#br-footersocial-toggle-settings'),
                $socialcolor = $('#customize-control-br_footer_socialiconcolor_settings'),
                $socialhovercolor = $('#customize-control-br_footer_socialiconhovercolor_settings');


            // Default

            if ($social_toggle.is(':checked')) {
                $socialcolor.show('slow');
                $socialhovercolor.show('slow');
            } else {
                $socialcolor.hide('slow');
                $socialhovercolor.hide('slow');
            }

            // on click
            $social_toggle.on('click', function () {

                var $this = $(this);

                if ($this.is(':checked')) {
                    $socialcolor.show('slow');
                    $socialhovercolor.show('slow');
                } else {
                    $socialcolor.hide('slow');
                    $socialhovercolor.hide('slow');
                }


            });


        });

    });


})(jQuery, wp.customize);