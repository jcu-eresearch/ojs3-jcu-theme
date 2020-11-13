<?php
import('lib.pkp.classes.plugins.ThemePlugin');
class JcuThemePlugin extends ThemePlugin {
        
        /**
         * Load the custom styles for our theme
         * @return null
         */
        public function init() {
                $this->setParent('defaultthemeplugin');
                $this->addStyle('stylesheet', 'styles/index.html');
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
