 <?php
                if(!class_exists(myplugin)
				{
					static $instance;
					public $plug_name;
					public $plug_version;
					function __Construct(){
						if(!is_admin()	return;
						self::instance=&$this;	
						$this->plug_name="myplugin";
						&this->plug_version="1.0.0";
						add_action("
						")
							
						add_action('plugins_loaded',array($this,'plugin_lang');
						add_action('plugins_loaded',array($this,'plugin_setup_hooks');
						
					}
					function plugin_setup_hooks()
					{
						add_action('wp_controls_enqueue_scripts',array($this,'customize_css_js'),100);
						add_action('wp_controls_print_footer_scripts',array($this,'print_template'));
						
					}
					
					function plugin_lang()
					{
						
					}
					function customize_css_js()
					{
						
					}
					function print_template()
					{
						
					}
				printf('<span id="cm-info" class="cm-notice">%1$s</span>',
                    'childify-me'
                );
                printf('<span id="cm-add-new" class="cm-add-new button button-primary" tabindex="0">%1$s
                    </span>',
                    "Childify Me"
                );
				}
				?>