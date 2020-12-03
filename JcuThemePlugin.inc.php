<?php
import('lib.pkp.classes.plugins.ThemePlugin');
class JcuThemePlugin extends ThemePlugin {
        
        /**
         * Load the custom styles for our theme
         * @return null
         */
        public function init() {
                $this->setParent('defaultthemeplugin');
                $this->addOption('primaryColour', 'FieldColor', [
                        'label' => __('plugins.themes.jcu-theme.primaryColour.label'),
                        'description' => __('plugins.themes.jcu-theme.primaryColour.description'),
                        'default' => '#1E6292',
                ]);

                $this->addOption('shadeColour', 'FieldColor', [
                        'label' => __('plugins.themes.jcu-theme.shadeColour.label'),
                        'description' => __('plugins.themes.jcu-theme.shadeColour.description'),
                        'default' => '#dddddd',
                ]);

                $primaryColour = $this->getOption('primaryColour');
                $shadeColour = $this->getOption('shadeColour');

                $this->modifyStyle('stylesheet', ['addLessVariables' => "@primary:$primaryColour;"]);
                $this->modifyStyle('stylesheet', ['addLessVariables' => "@bg-shade:$shadeColour;"]);
        }

        /**
         * Get the display name of this theme
         * @return string
         */
        function getDisplayName() {
                return __('plugins.themes.jcu-theme.name');
        }

        /**
         * Get the description of this plugin
         * @return string
         */
        function getDescription() {
                return __('plugins.themes.jcu-theme.description');
        }
}
