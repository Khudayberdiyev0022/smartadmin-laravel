<!-- BEGIN Left Aside -->
<aside class="page-sidebar">
  <div class="page-logo">
    <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
      <img src="{{ asset('assets/img/logo.png') }}" alt="SmartAdmin WebApp" aria-roledescription="logo">
      <span class="page-logo-text mr-1">{{ __('main.admin_dashboard') }}</span>
      <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
      <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
    </a>
  </div>
  <!-- BEGIN PRIMARY NAVIGATION -->
  <nav id="js-primary-nav" class="primary-nav" role="navigation">
    <div class="nav-filter">
      <div class="position-relative">
        <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control" tabindex="0">
        <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
          <i class="fal fa-chevron-up"></i>
        </a>
      </div>
    </div>
    <div class="info-card">
      <img src="{{ asset('assets/img/demo/avatars/avatar-admin.png') }}" class="profile-image rounded-circle" alt="Dr. Codex Lantern">
      <div class="info-card-text">
        <a href="#" class="d-flex align-items-center text-white">
                                    <span class="text-truncate text-truncate-sm d-inline-block">
                                        {{ auth()->user()->name }}
                                    </span>
        </a>
        <span class="d-inline-block">{{ auth()->user()->email }}</span>
      </div>
      <img src="{{ asset('assets/img/card-backgrounds/cover-2-lg.png') }}" class="cover" alt="cover">
      <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
        <i class="fal fa-angle-down"></i>
      </a>
    </div>
    <ul id="js-nav-menu" class="nav-menu">
      <li class="active open">
        <a href="#" title="Application Intel" data-filter-tags="application intel">
          <i class="fal fa-info-circle"></i>
          <span class="nav-link-text" data-i18n="nav.application_intel">Application Intel</span>
        </a>
        <ul>
          <li>
            <a href="intel_analytics_dashboard.html" title="Analytics Dashboard" data-filter-tags="application intel analytics dashboard">
              <span class="nav-link-text" data-i18n="nav.application_intel_analytics_dashboard">Analytics Dashboard</span>
            </a>
          </li>
          <li class="active">
            <a href="intel_marketing_dashboard.html" title="Marketing Dashboard" data-filter-tags="application intel marketing dashboard">
              <span class="nav-link-text" data-i18n="nav.application_intel_marketing_dashboard">Marketing Dashboard</span>
            </a>
          </li>
          <li>
            <a href="intel_introduction.html" title="Introduction" data-filter-tags="application intel introduction">
              <span class="nav-link-text" data-i18n="nav.application_intel_introduction">Introduction</span>
            </a>
          </li>
          <li>
            <a href="intel_privacy.html" title="Privacy" data-filter-tags="application intel privacy">
              <span class="nav-link-text" data-i18n="nav.application_intel_privacy">Privacy</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#" title="Theme Settings" data-filter-tags="theme settings">
          <i class="fal fa-cog"></i>
          <span class="nav-link-text" data-i18n="nav.theme_settings">Theme Settings</span>
        </a>
        <ul>
          <li>
            <a href="settings_how_it_works.html" title="How it works" data-filter-tags="theme settings how it works">
              <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">How it works</span>
            </a>
          </li>
          <li>
            <a href="settings_layout_options.html" title="Layout Options" data-filter-tags="theme settings layout options">
              <span class="nav-link-text" data-i18n="nav.theme_settings_layout_options">Layout Options</span>
            </a>
          </li>
          <li>
            <a href="settings_theme_modes.html" title="Theme Modes (beta)" data-filter-tags="theme settings theme modes (beta)">
              <span class="nav-link-text" data-i18n="nav.theme_settings_theme_modes_(beta)">Theme Modes (beta)</span>
            </a>
          </li>
          <li>
            <a href="settings_skin_options.html" title="Skin Options" data-filter-tags="theme settings skin options">
              <span class="nav-link-text" data-i18n="nav.theme_settings_skin_options">Skin Options</span>
            </a>
          </li>
          <li>
            <a href="settings_saving_db.html" title="Saving to Database" data-filter-tags="theme settings saving to database">
              <span class="nav-link-text" data-i18n="nav.theme_settings_saving_to_database">Saving to Database</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#" title="Documentation" data-filter-tags="documentation">
          <i class="fal fa-book"></i>
          <span class="nav-link-text" data-i18n="nav.documentation">Documentation</span>
        </a>
        <ul>
          <li>
            <a href="docs_general.html" title="General Docs" data-filter-tags="documentation general docs">
              <span class="nav-link-text" data-i18n="nav.documentation_general_docs">General Docs</span>
            </a>
          </li>
          <li>
            <a href="docs_project_structure.html" title="Project Structure" data-filter-tags="documentation project structure">
              <span class="nav-link-text" data-i18n="nav.documentation_project_structure">Project Structure</span>
            </a>
          </li>
          <li>
            <a href="docs_flavors_editions.html" title="Flavors & Editions" data-filter-tags="documentation flavors & editions">
              <span class="nav-link-text" data-i18n="nav.documentation_flavors_&_editions">Flavors & Editions</span>
            </a>
          </li>
          <li>
            <a href="docs_community_support.html" title="Community Support" data-filter-tags="documentation community support">
              <span class="nav-link-text" data-i18n="nav.documentation_community_support">Community Support</span>
            </a>
          </li>
          <li>
            <a href="docs_premium_support.html" title="Premium Support" data-filter-tags="documentation premium support">
              <span class="nav-link-text" data-i18n="nav.documentation_premium_support">Premium Support</span>
            </a>
          </li>
          <li>
            <a href="docs_licensing.html" title="Licensing" data-filter-tags="documentation licensing">
              <span class="nav-link-text" data-i18n="nav.documentation_licensing">Licensing</span>
            </a>
          </li>
          <li>
            <a href="docs_buildnotes.html" title="Build Notes" data-filter-tags="documentation build notes">
              <span class="nav-link-text" data-i18n="nav.documentation_build_notes">Build Notes</span>
              <span class="">v4.5.1</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-title">Tools & Components</li>
      <li>
        <a href="#" title="UI Components" data-filter-tags="ui components">
          <i class="fal fa-window"></i>
          <span class="nav-link-text" data-i18n="nav.ui_components">UI Components</span>
        </a>
        <ul>
          <li>
            <a href="ui_alerts.html" title="Alerts" data-filter-tags="ui components alerts">
              <span class="nav-link-text" data-i18n="nav.ui_components_alerts">Alerts</span>
            </a>
          </li>
          <li>
            <a href="ui_accordion.html" title="Accordions" data-filter-tags="ui components accordions">
              <span class="nav-link-text" data-i18n="nav.ui_components_accordions">Accordions</span>
            </a>
          </li>
          <li>
            <a href="ui_badges.html" title="Badges" data-filter-tags="ui components badges">
              <span class="nav-link-text" data-i18n="nav.ui_components_badges">Badges</span>
            </a>
          </li>
          <li>
            <a href="ui_breadcrumbs.html" title="Breadcrumbs" data-filter-tags="ui components breadcrumbs">
              <span class="nav-link-text" data-i18n="nav.ui_components_breadcrumbs">Breadcrumbs</span>
            </a>
          </li>
          <li>
            <a href="ui_buttons.html" title="Buttons" data-filter-tags="ui components buttons">
              <span class="nav-link-text" data-i18n="nav.ui_components_buttons">Buttons</span>
            </a>
          </li>
          <li>
            <a href="ui_button_group.html" title="Button Group" data-filter-tags="ui components button group">
              <span class="nav-link-text" data-i18n="nav.ui_components_button_group">Button Group</span>
            </a>
          </li>
          <li>
            <a href="ui_cards.html" title="Cards" data-filter-tags="ui components cards">
              <span class="nav-link-text" data-i18n="nav.ui_components_cards">Cards</span>
            </a>
          </li>
          <li>
            <a href="ui_carousel.html" title="Carousel" data-filter-tags="ui components carousel">
              <span class="nav-link-text" data-i18n="nav.ui_components_carousel">Carousel</span>
            </a>
          </li>
          <li>
            <a href="ui_collapse.html" title="Collapse" data-filter-tags="ui components collapse">
              <span class="nav-link-text" data-i18n="nav.ui_components_collapse">Collapse</span>
            </a>
          </li>
          <li>
            <a href="ui_dropdowns.html" title="Dropdowns" data-filter-tags="ui components dropdowns">
              <span class="nav-link-text" data-i18n="nav.ui_components_dropdowns">Dropdowns</span>
            </a>
          </li>
          <li>
            <a href="ui_list_filter.html" title="List Filter" data-filter-tags="ui components list filter">
              <span class="nav-link-text" data-i18n="nav.ui_components_list_filter">List Filter</span>
            </a>
          </li>
          <li>
            <a href="ui_modal.html" title="Modal" data-filter-tags="ui components modal">
              <span class="nav-link-text" data-i18n="nav.ui_components_modal">Modal</span>
            </a>
          </li>
          <li>
            <a href="ui_navbars.html" title="Navbars" data-filter-tags="ui components navbars">
              <span class="nav-link-text" data-i18n="nav.ui_components_navbars">Navbars</span>
            </a>
          </li>
          <li>
            <a href="ui_panels.html" title="Panels" data-filter-tags="ui components panels">
              <span class="nav-link-text" data-i18n="nav.ui_components_panels">Panels</span>
            </a>
          </li>
          <li>
            <a href="ui_pagination.html" title="Pagination" data-filter-tags="ui components pagination">
              <span class="nav-link-text" data-i18n="nav.ui_components_pagination">Pagination</span>
            </a>
          </li>
          <li>
            <a href="ui_popovers.html" title="Popovers" data-filter-tags="ui components popovers">
              <span class="nav-link-text" data-i18n="nav.ui_components_popovers">Popovers</span>
            </a>
          </li>
          <li>
            <a href="ui_progress_bars.html" title="Progress Bars" data-filter-tags="ui components progress bars">
              <span class="nav-link-text" data-i18n="nav.ui_components_progress_bars">Progress Bars</span>
            </a>
          </li>
          <li>
            <a href="ui_scrollspy.html" title="ScrollSpy" data-filter-tags="ui components scrollspy">
              <span class="nav-link-text" data-i18n="nav.ui_components_scrollspy">ScrollSpy</span>
            </a>
          </li>
          <li>
            <a href="ui_side_panel.html" title="Side Panel" data-filter-tags="ui components side panel">
              <span class="nav-link-text" data-i18n="nav.ui_components_side_panel">Side Panel</span>
            </a>
          </li>
          <li>
            <a href="ui_spinners.html" title="Spinners" data-filter-tags="ui components spinners">
              <span class="nav-link-text" data-i18n="nav.ui_components_spinners">Spinners</span>
            </a>
          </li>
          <li>
            <a href="ui_tabs_pills.html" title="Tabs & Pills" data-filter-tags="ui components tabs & pills">
              <span class="nav-link-text" data-i18n="nav.ui_components_tabs_&_pills">Tabs & Pills</span>
            </a>
          </li>
          <li>
            <a href="ui_toasts.html" title="Toasts" data-filter-tags="ui components toasts">
              <span class="nav-link-text" data-i18n="nav.ui_components_toasts">Toasts</span>
            </a>
          </li>
          <li>
            <a href="ui_tooltips.html" title="Tooltips" data-filter-tags="ui components tooltips">
              <span class="nav-link-text" data-i18n="nav.ui_components_tooltips">Tooltips</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#" title="Utilities" data-filter-tags="utilities">
          <i class="fal fa-bolt"></i>
          <span class="nav-link-text" data-i18n="nav.utilities">Utilities</span>
        </a>
        <ul>
          <li>
            <a href="utilities_borders.html" title="Borders" data-filter-tags="utilities borders">
              <span class="nav-link-text" data-i18n="nav.utilities_borders">Borders</span>
            </a>
          </li>
          <li>
            <a href="utilities_clearfix.html" title="Clearfix" data-filter-tags="utilities clearfix">
              <span class="nav-link-text" data-i18n="nav.utilities_clearfix">Clearfix</span>
            </a>
          </li>
          <li>
            <a href="utilities_color_pallet.html" title="Color Pallet" data-filter-tags="utilities color pallet">
              <span class="nav-link-text" data-i18n="nav.utilities_color_pallet">Color Pallet</span>
            </a>
          </li>
          <li>
            <a href="utilities_display_property.html" title="Display Property" data-filter-tags="utilities display property">
              <span class="nav-link-text" data-i18n="nav.utilities_display_property">Display Property</span>
            </a>
          </li>
          <li>
            <a href="utilities_fonts.html" title="Fonts" data-filter-tags="utilities fonts">
              <span class="nav-link-text" data-i18n="nav.utilities_fonts">Fonts</span>
            </a>
          </li>
          <li>
            <a href="utilities_flexbox.html" title="Flexbox" data-filter-tags="utilities flexbox">
              <span class="nav-link-text" data-i18n="nav.utilities_flexbox">Flexbox</span>
            </a>
          </li>
          <li>
            <a href="utilities_helpers.html" title="Helpers" data-filter-tags="utilities helpers">
              <span class="nav-link-text" data-i18n="nav.utilities_helpers">Helpers</span>
            </a>
          </li>
          <li>
            <a href="utilities_position.html" title="Position" data-filter-tags="utilities position">
              <span class="nav-link-text" data-i18n="nav.utilities_position">Position</span>
            </a>
          </li>
          <li>
            <a href="utilities_responsive_grid.html" title="Responsive Grid" data-filter-tags="utilities responsive grid">
              <span class="nav-link-text" data-i18n="nav.utilities_responsive_grid">Responsive Grid</span>
            </a>
          </li>
          <li>
            <a href="utilities_sizing.html" title="Sizing" data-filter-tags="utilities sizing">
              <span class="nav-link-text" data-i18n="nav.utilities_sizing">Sizing</span>
            </a>
          </li>
          <li>
            <a href="utilities_spacing.html" title="Spacing" data-filter-tags="utilities spacing">
              <span class="nav-link-text" data-i18n="nav.utilities_spacing">Spacing</span>
            </a>
          </li>
          <li>
            <a href="utilities_typography.html" title="Typography" data-filter-tags="utilities typography fonts headings bold lead colors sizes link text states list styles truncate alignment">
              <span class="nav-link-text" data-i18n="nav.utilities_typography">Typography</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);" title="Menu child" data-filter-tags="utilities menu child">
              <span class="nav-link-text" data-i18n="nav.utilities_menu_child">Menu child</span>
            </a>
            <ul>
              <li>
                <a href="javascript:void(0);" title="Sublevel Item" data-filter-tags="utilities menu child sublevel item">
                  <span class="nav-link-text" data-i18n="nav.utilities_menu_child_sublevel_item">Sublevel Item</span>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" title="Another Item" data-filter-tags="utilities menu child another item">
                  <span class="nav-link-text" data-i18n="nav.utilities_menu_child_another_item">Another Item</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="disabled">
            <a href="javascript:void(0);" title="Disabled item" data-filter-tags="utilities disabled item">
              <span class="nav-link-text" data-i18n="nav.utilities_disabled_item">Disabled item</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#" title="Font Icons" data-filter-tags="font icons">
          <i class="fal fa-map-marker-alt"></i>
          <span class="nav-link-text" data-i18n="nav.font_icons">Font Icons</span>
          <span class="dl-ref bg-primary-500 hidden-nav-function-minify hidden-nav-function-top">7,500+</span>
        </a>
        <ul>
          <li>
            <a href="javascript:void(0);" title="FontAwesome" data-filter-tags="font icons fontawesome">
              <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome">FontAwesome Pro</span>
            </a>
            <ul>
              <li>
                <a href="icons_fontawesome_light.html" title="Light" data-filter-tags="font icons fontawesome light">
                  <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_light">Light</span>
                </a>
              </li>
              <li>
                <a href="icons_fontawesome_regular.html" title="Regular" data-filter-tags="font icons fontawesome regular">
                  <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_regular">Regular</span>
                </a>
              </li>
              <li>
                <a href="icons_fontawesome_solid.html" title="Solid" data-filter-tags="font icons fontawesome solid">
                  <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_solid">Solid</span>
                </a>
              </li>
              <li>
                <a href="icons_fontawesome_duotone.html" title="Duotone" data-filter-tags="font icons fontawesome duotone">
                  <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_duotone">Duotone</span>
                </a>
              </li>
              <li>
                <a href="icons_fontawesome_brand.html" title="Brand" data-filter-tags="font icons fontawesome brand">
                  <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_brand">Brand</span>
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascript:void(0);" title="NextGen Icons" data-filter-tags="font icons nextgen icons">
              <span class="nav-link-text" data-i18n="nav.font_icons_nextgen_icons">NextGen Icons</span>
            </a>
            <ul>
              <li>
                <a href="icons_nextgen_general.html" title="General" data-filter-tags="font icons nextgen icons general">
                  <span class="nav-link-text" data-i18n="nav.font_icons_nextgen_icons_general">General</span>
                </a>
              </li>
              <li>
                <a href="icons_nextgen_base.html" title="Base" data-filter-tags="font icons nextgen icons base">
                  <span class="nav-link-text" data-i18n="nav.font_icons_nextgen_icons_base">Base</span>
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascript:void(0);" title="Stack Icons" data-filter-tags="font icons stack icons">
              <span class="nav-link-text" data-i18n="nav.font_icons_stack_icons">Stack Icons</span>
            </a>
            <ul>
              <li>
                <a href="icons_stack_showcase.html" title="Showcase" data-filter-tags="font icons stack icons showcase">
                  <span class="nav-link-text" data-i18n="nav.font_icons_stack_icons_showcase">Showcase</span>
                </a>
              </li>
              <li>
                <a href="icons_stack_generate.html?layers=3" title="Generate Stack" data-filter-tags="font icons stack icons generate stack">
                  <span class="nav-link-text" data-i18n="nav.font_icons_stack_icons_generate_stack">Generate Stack</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li>
        <a href="#" title="Tables" data-filter-tags="tables">
          <i class="fal fa-th-list"></i>
          <span class="nav-link-text" data-i18n="nav.tables">Tables</span>
        </a>
        <ul>
          <li>
            <a href="tables_basic.html" title="Basic Tables" data-filter-tags="tables basic tables">
              <span class="nav-link-text" data-i18n="nav.tables_basic_tables">Basic Tables</span>
            </a>
          </li>
          <li>
            <a href="tables_generate_style.html" title="Generate Table Style" data-filter-tags="tables generate table style">
              <span class="nav-link-text" data-i18n="nav.tables_generate_table_style">Generate Table Style</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#" title="Form Stuff" data-filter-tags="form stuff">
          <i class="fal fa-edit"></i>
          <span class="nav-link-text" data-i18n="nav.form_stuff">Form Stuff</span>
        </a>
        <ul>
          <li>
            <a href="form_basic_inputs.html" title="Basic Inputs" data-filter-tags="form stuff basic inputs">
              <span class="nav-link-text" data-i18n="nav.form_stuff_basic_inputs">Basic Inputs</span>
            </a>
          </li>
          <li>
            <a href="form_checkbox_radio.html" title="Checkbox & Radio" data-filter-tags="form stuff checkbox & radio">
              <span class="nav-link-text" data-i18n="nav.form_stuff_checkbox_&_radio">Checkbox & Radio</span>
            </a>
          </li>
          <li>
            <a href="form_input_groups.html" title="Input Groups" data-filter-tags="form stuff input groups">
              <span class="nav-link-text" data-i18n="nav.form_stuff_input_groups">Input Groups</span>
            </a>
          </li>
          <li>
            <a href="form_validation.html" title="Validation" data-filter-tags="form stuff validation">
              <span class="nav-link-text" data-i18n="nav.form_stuff_validation">Validation</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-title">Plugins & Addons</li>
      <li>
        <a href="#" title="Plugins" data-filter-tags="plugins">
          <i class="fal fa-shield-alt"></i>
          <span class="nav-link-text" data-i18n="nav.plugins">Core Plugins</span>
        </a>
        <ul>
          <li>
            <a href="plugins_faq.html" title="Plugins FAQ" data-filter-tags="plugins plugins faq">
              <span class="nav-link-text" data-i18n="nav.plugins_plugins_faq">Plugins FAQ</span>
            </a>
          </li>
          <li>
            <a href="plugins_waves.html" title="Waves" data-filter-tags="plugins waves">
              <span class="nav-link-text" data-i18n="nav.plugins_waves">Waves</span>
              <span class="dl-ref label bg-primary-400 ml-2">9 KB</span>
            </a>
          </li>
          <li>
            <a href="plugins_pacejs.html" title="PaceJS" data-filter-tags="plugins pacejs">
              <span class="nav-link-text" data-i18n="nav.plugins_pacejs">PaceJS</span>
              <span class="dl-ref label bg-primary-500 ml-2">13 KB</span>
            </a>
          </li>
          <li>
            <a href="plugins_smartpanels.html" title="SmartPanels" data-filter-tags="plugins smartpanels">
              <span class="nav-link-text" data-i18n="nav.plugins_smartpanels">SmartPanels</span>
              <span class="dl-ref label bg-primary-600 ml-2">9 KB</span>
            </a>
          </li>
          <li>
            <a href="plugins_bootbox.html" title="BootBox" data-filter-tags="plugins bootbox alert sound">
              <span class="nav-link-text" data-i18n="nav.plugins_bootbox">BootBox</span>
              <span class="dl-ref label bg-primary-600 ml-2">15 KB</span>
            </a>
          </li>
          <li>
            <a href="plugins_slimscroll.html" title="Slimscroll" data-filter-tags="plugins slimscroll">
              <span class="nav-link-text" data-i18n="nav.plugins_slimscroll">Slimscroll</span>
              <span class="dl-ref label bg-primary-700 ml-2">5 KB</span>
            </a>
          </li>
          <li>
            <a href="plugins_throttle.html" title="Throttle" data-filter-tags="plugins throttle">
              <span class="nav-link-text" data-i18n="nav.plugins_throttle">Throttle</span>
              <span class="dl-ref label bg-primary-700 ml-2">1 KB</span>
            </a>
          </li>
          <li>
            <a href="plugins_navigation.html" title="Navigation" data-filter-tags="plugins navigation">
              <span class="nav-link-text" data-i18n="nav.plugins_navigation">Navigation</span>
              <span class="dl-ref label bg-primary-700 ml-2">2 KB</span>
            </a>
          </li>
          <li>
            <a href="plugins_i18next.html" title="i18next" data-filter-tags="plugins i18next">
              <span class="nav-link-text" data-i18n="nav.plugins_i18next">i18next</span>
              <span class="dl-ref label bg-primary-700 ml-2">10 KB</span>
            </a>
          </li>
          <li>
            <a href="plugins_appcore.html" title="App.Core" data-filter-tags="plugins app.core">
              <span class="nav-link-text" data-i18n="nav.plugins_app.core">App.Core</span>
              <span class="dl-ref label bg-success-700 ml-2">14 KB</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#" title="Datatables" data-filter-tags="datatables datagrid">
          <i class="fal fa-table"></i>
          <span class="nav-link-text" data-i18n="nav.datatables">Datatables</span>
          <span class="dl-ref bg-primary-500 hidden-nav-function-minify hidden-nav-function-top">235 KB</span>
        </a>
        <ul>
          <li>
            <a href="datatables_basic.html" title="Basic" data-filter-tags="datatables datagrid basic">
              <span class="nav-link-text" data-i18n="nav.datatables_basic">Basic</span>
            </a>
          </li>
          <li>
            <a href="datatables_autofill.html" title="Autofill" data-filter-tags="datatables datagrid autofill">
              <span class="nav-link-text" data-i18n="nav.datatables_autofill">Autofill</span>
            </a>
          </li>
          <li>
            <a href="datatables_buttons.html" title="Buttons" data-filter-tags="datatables datagrid buttons">
              <span class="nav-link-text" data-i18n="nav.datatables_buttons">Buttons</span>
            </a>
          </li>
          <li>
            <a href="datatables_export.html" title="Export" data-filter-tags="datatables datagrid export tables pdf excel print csv">
              <span class="nav-link-text" data-i18n="nav.datatables_export">Export</span>
            </a>
          </li>
          <li>
            <a href="datatables_colreorder.html" title="ColReorder" data-filter-tags="datatables datagrid colreorder">
              <span class="nav-link-text" data-i18n="nav.datatables_colreorder">ColReorder</span>
            </a>
          </li>
          <li>
            <a href="datatables_columnfilter.html" title="ColumnFilter" data-filter-tags="datatables datagrid columnfilter">
              <span class="nav-link-text" data-i18n="nav.datatables_columnfilter">ColumnFilter</span>
            </a>
          </li>
          <li>
            <a href="datatables_fixedcolumns.html" title="FixedColumns" data-filter-tags="datatables datagrid fixedcolumns">
              <span class="nav-link-text" data-i18n="nav.datatables_fixedcolumns">FixedColumns</span>
            </a>
          </li>
          <li>
            <a href="datatables_fixedheader.html" title="FixedHeader" data-filter-tags="datatables datagrid fixedheader">
              <span class="nav-link-text" data-i18n="nav.datatables_fixedheader">FixedHeader</span>
            </a>
          </li>
          <li>
            <a href="datatables_keytable.html" title="KeyTable" data-filter-tags="datatables datagrid keytable">
              <span class="nav-link-text" data-i18n="nav.datatables_keytable">KeyTable</span>
            </a>
          </li>
          <li>
            <a href="datatables_responsive.html" title="Responsive" data-filter-tags="datatables datagrid responsive">
              <span class="nav-link-text" data-i18n="nav.datatables_responsive">Responsive</span>
            </a>
          </li>
          <li>
            <a href="datatables_responsive_alt.html" title="Responsive Alt" data-filter-tags="datatables datagrid responsive alt">
              <span class="nav-link-text" data-i18n="nav.datatables_responsive_alt">Responsive Alt</span>
            </a>
          </li>
          <li>
            <a href="datatables_rowgroup.html" title="RowGroup" data-filter-tags="datatables datagrid rowgroup">
              <span class="nav-link-text" data-i18n="nav.datatables_rowgroup">RowGroup</span>
            </a>
          </li>
          <li>
            <a href="datatables_rowreorder.html" title="RowReorder" data-filter-tags="datatables datagrid rowreorder">
              <span class="nav-link-text" data-i18n="nav.datatables_rowreorder">RowReorder</span>
            </a>
          </li>
          <li>
            <a href="datatables_scroller.html" title="Scroller" data-filter-tags="datatables datagrid scroller">
              <span class="nav-link-text" data-i18n="nav.datatables_scroller">Scroller</span>
            </a>
          </li>
          <li>
            <a href="datatables_select.html" title="Select" data-filter-tags="datatables datagrid select">
              <span class="nav-link-text" data-i18n="nav.datatables_select">Select</span>
            </a>
          </li>
          <li>
            <a href="datatables_alteditor.html" title="AltEditor" data-filter-tags="datatables datagrid alteditor">
              <span class="nav-link-text" data-i18n="nav.datatables_alteditor">AltEditor</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#" title="Statistics" data-filter-tags="statistics chart graphs">
          <i class="fal fa-chart-pie"></i>
          <span class="nav-link-text" data-i18n="nav.statistics">Statistics</span>
        </a>
        <ul>
          <li>
            <a href="statistics_flot.html" title="Flot" data-filter-tags="statistics chart graphs flot bar pie">
              <span class="nav-link-text" data-i18n="nav.statistics_flot">Flot</span>
              <span class="dl-ref label bg-primary-500 ml-2">36 KB</span>
            </a>
          </li>
          <li>
            <a href="statistics_chartjs.html" title="Chart.js" data-filter-tags="statistics chart graphs chart.js bar pie">
              <span class="nav-link-text" data-i18n="nav.statistics_chart.js">Chart.js</span>
              <span class="dl-ref label bg-primary-500 ml-2">205 KB</span>
            </a>
          </li>
          <li>
            <a href="statistics_chartist.html" title="Chartist.js" data-filter-tags="statistics chart graphs chartist.js">
              <span class="nav-link-text" data-i18n="nav.statistics_chartist.js">Chartist.js</span>
              <span class="dl-ref label bg-primary-600 ml-2">39 KB</span>
            </a>
          </li>
          <li>
            <a href="statistics_c3.html" title="C3 Charts" data-filter-tags="statistics chart graphs c3 charts">
              <span class="nav-link-text" data-i18n="nav.statistics_c3_charts">C3 Charts</span>
              <span class="dl-ref label bg-primary-600 ml-2">197 KB</span>
            </a>
          </li>
          <li>
            <a href="statistics_peity.html" title="Peity" data-filter-tags="statistics chart graphs peity small">
              <span class="nav-link-text" data-i18n="nav.statistics_peity">Peity</span>
              <span class="dl-ref label bg-primary-700 ml-2">4 KB</span>
            </a>
          </li>
          <li>
            <a href="statistics_sparkline.html" title="Sparkline" data-filter-tags="statistics chart graphs sparkline small tiny">
              <span class="nav-link-text" data-i18n="nav.statistics_sparkline">Sparkline</span>
              <span class="dl-ref label bg-primary-700 ml-2">42 KB</span>
            </a>
          </li>
          <li>
            <a href="statistics_easypiechart.html" title="Easy Pie Chart" data-filter-tags="statistics chart graphs easy pie chart">
              <span class="nav-link-text" data-i18n="nav.statistics_easy_pie_chart">Easy Pie Chart</span>
              <span class="dl-ref label bg-primary-700 ml-2">4 KB</span>
            </a>
          </li>
          <li>
            <a href="statistics_dygraph.html" title="Dygraph" data-filter-tags="statistics chart graphs dygraph complex">
              <span class="nav-link-text" data-i18n="nav.statistics_dygraph">Dygraph</span>
              <span class="dl-ref label bg-primary-700 ml-2">120 KB</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#" title="Notifications" data-filter-tags="notifications">
          <i class="fal fa-exclamation-circle"></i>
          <span class="nav-link-text" data-i18n="nav.notifications">Notifications</span>
        </a>
        <ul>
          <li>
            <a href="notifications_sweetalert2.html" title="SweetAlert2" data-filter-tags="notifications sweetalert2">
              <span class="nav-link-text" data-i18n="nav.notifications_sweetalert2">SweetAlert2</span>
              <span class="dl-ref label bg-primary-500 ml-2">40 KB</span>
            </a>
          </li>
          <li>
            <a href="notifications_toastr.html" title="Toastr" data-filter-tags="notifications toastr">
              <span class="nav-link-text" data-i18n="nav.notifications_toastr">Toastr</span>
              <span class="dl-ref label bg-primary-600 ml-2">5 KB</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#" title="Form Plugins" data-filter-tags="form plugins">
          <i class="fal fa-credit-card-front"></i>
          <span class="nav-link-text" data-i18n="nav.form_plugins">Form Plugins</span>
        </a>
        <ul>
          <li>
            <a href="form_plugins_colorpicker.html" title="Color Picker" data-filter-tags="form plugins color picker">
              <span class="nav-link-text" data-i18n="nav.form_plugins_color_picker">Color Picker</span>
            </a>
          </li>
          <li>
            <a href="form_plugins_datepicker.html" title="Date Picker" data-filter-tags="form plugins date picker">
              <span class="nav-link-text" data-i18n="nav.form_plugins_date_picker">Date Picker</span>
            </a>
          </li>
          <li>
            <a href="form_plugins_daterange_picker.html" title="Date Range Picker" data-filter-tags="form plugins date range picker">
              <span class="nav-link-text" data-i18n="nav.form_plugins_date_range_picker">Date Range Picker</span>
            </a>
          </li>
          <li>
            <a href="form_plugins_dropzone.html" title="Dropzone" data-filter-tags="form plugins dropzone">
              <span class="nav-link-text" data-i18n="nav.form_plugins_dropzone">Dropzone</span>
            </a>
          </li>
          <li>
            <a href="form_plugins_ionrangeslider.html" title="Ion.RangeSlider" data-filter-tags="form plugins ion.rangeslider">
              <span class="nav-link-text" data-i18n="nav.form_plugins_ion.rangeslider">Ion.RangeSlider</span>
            </a>
          </li>
          <li>
            <a href="form_plugins_inputmask.html" title="Inputmask" data-filter-tags="form plugins inputmask">
              <span class="nav-link-text" data-i18n="nav.form_plugins_inputmask">Inputmask</span>
            </a>
          </li>
          <li>
            <a href="form_plugins_imagecropper.html" title="Image Cropper" data-filter-tags="form plugins image cropper">
              <span class="nav-link-text" data-i18n="nav.form_plugins_image_cropper">Image Cropper</span>
            </a>
          </li>
          <li>
            <a href="form_plugins_select2.html" title="Select2" data-filter-tags="form plugins select2">
              <span class="nav-link-text" data-i18n="nav.form_plugins_select2">Select2</span>
            </a>
          </li>
          <li>
            <a href="form_plugins_summernote.html" title="Summernote" data-filter-tags="form plugins summernote texteditor editor">
              <span class="nav-link-text" data-i18n="nav.form_plugins_summernote">Summernote</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#" title="Miscellaneous" data-filter-tags="miscellaneous">
          <i class="fal fa-globe"></i>
          <span class="nav-link-text" data-i18n="nav.miscellaneous">Miscellaneous</span>
        </a>
        <ul>
          <li>
            <a href="miscellaneous_fullcalendar.html" title="FullCalendar" data-filter-tags="miscellaneous fullcalendar">
              <span class="nav-link-text" data-i18n="nav.miscellaneous_fullcalendar">FullCalendar</span>
            </a>
          </li>
          <li>
            <a href="miscellaneous_lightgallery.html" title="Light Gallery" data-filter-tags="miscellaneous light gallery">
              <span class="nav-link-text" data-i18n="nav.miscellaneous_light_gallery">Light Gallery</span>
              <span class="dl-ref label bg-primary-500 ml-2">61 KB</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-title">Layouts & Apps</li>
      <li>
        <a href="#" title="Pages" data-filter-tags="pages">
          <i class="fal fa-plus-circle"></i>
          <span class="nav-link-text" data-i18n="nav.pages">Page Views</span>
        </a>
        <ul>
          <li>
            <a href="page_chat.html" title="Chat" data-filter-tags="pages chat">
              <span class="nav-link-text" data-i18n="nav.pages_chat">Chat</span>
            </a>
          </li>
          <li>
            <a href="page_contacts.html" title="Contacts" data-filter-tags="pages contacts">
              <span class="nav-link-text" data-i18n="nav.pages_contacts">Contacts</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);" title="Forum" data-filter-tags="pages forum">
              <span class="nav-link-text" data-i18n="nav.pages_forum">Forum</span>
            </a>
            <ul>
              <li>
                <a href="page_forum_list.html" title="List" data-filter-tags="pages forum list">
                  <span class="nav-link-text" data-i18n="nav.pages_forum_list">List</span>
                </a>
              </li>
              <li>
                <a href="page_forum_threads.html" title="Threads" data-filter-tags="pages forum threads">
                  <span class="nav-link-text" data-i18n="nav.pages_forum_threads">Threads</span>
                </a>
              </li>
              <li>
                <a href="page_forum_discussion.html" title="Discussion" data-filter-tags="pages forum discussion">
                  <span class="nav-link-text" data-i18n="nav.pages_forum_discussion">Discussion</span>
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascript:void(0);" title="Inbox" data-filter-tags="pages inbox">
              <span class="nav-link-text" data-i18n="nav.pages_inbox">Inbox</span>
            </a>
            <ul>
              <li>
                <a href="page_inbox_general.html" title="General" data-filter-tags="pages inbox general">
                  <span class="nav-link-text" data-i18n="nav.pages_inbox_general">General</span>
                </a>
              </li>
              <li>
                <a href="page_inbox_read.html" title="Read" data-filter-tags="pages inbox read">
                  <span class="nav-link-text" data-i18n="nav.pages_inbox_read">Read</span>
                </a>
              </li>
              <li>
                <a href="page_inbox_write.html" title="Write" data-filter-tags="pages inbox write">
                  <span class="nav-link-text" data-i18n="nav.pages_inbox_write">Write</span>
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="page_invoice.html" title="Invoice (printable)" data-filter-tags="pages invoice (printable)">
              <span class="nav-link-text" data-i18n="nav.pages_invoice_(printable)">Invoice (printable)</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);" title="Authentication" data-filter-tags="pages authentication">
              <span class="nav-link-text" data-i18n="nav.pages_authentication">Authentication</span>
            </a>
            <ul>
              <li>
                <a href="page_forget.html" title="Forget Password" data-filter-tags="pages authentication forget password">
                  <span class="nav-link-text" data-i18n="nav.pages_authentication_forget_password">Forget Password</span>
                </a>
              </li>
              <li>
                <a href="page_locked.html" title="Locked Screen" data-filter-tags="pages authentication locked screen">
                  <span class="nav-link-text" data-i18n="nav.pages_authentication_locked_screen">Locked Screen</span>
                </a>
              </li>
              <li>
                <a href="page_login.html" title="Login" data-filter-tags="pages authentication login">
                  <span class="nav-link-text" data-i18n="nav.pages_authentication_login">Login</span>
                </a>
              </li>
              <li>
                <a href="page_login_alt.html" title="Login Alt" data-filter-tags="pages authentication login alt">
                  <span class="nav-link-text" data-i18n="nav.pages_authentication_login_alt">Login Alt</span>
                </a>
              </li>
              <li>
                <a href="page_register.html" title="Register" data-filter-tags="pages authentication register">
                  <span class="nav-link-text" data-i18n="nav.pages_authentication_register">Register</span>
                </a>
              </li>
              <li>
                <a href="page_confirmation.html" title="Confirmation" data-filter-tags="pages authentication confirmation">
                  <span class="nav-link-text" data-i18n="nav.pages_authentication_confirmation">Confirmation</span>
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascript:void(0);" title="Error Pages" data-filter-tags="pages error pages">
              <span class="nav-link-text" data-i18n="nav.pages_error_pages">Error Pages</span>
            </a>
            <ul>
              <li>
                <a href="page_error.html" title="General Error" data-filter-tags="pages error pages general error">
                  <span class="nav-link-text" data-i18n="nav.pages_error_pages_general_error">General Error</span>
                </a>
              </li>
              <li>
                <a href="page_error_404.html" title="Server Error" data-filter-tags="pages error pages server error">
                  <span class="nav-link-text" data-i18n="nav.pages_error_pages_server_error">Server Error</span>
                </a>
              </li>
              <li>
                <a href="page_error_announced.html" title="Announced Error" data-filter-tags="pages error pages announced error">
                  <span class="nav-link-text" data-i18n="nav.pages_error_pages_announced_error">Announced Error</span>
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="page_profile.html" title="Profile" data-filter-tags="pages profile">
              <span class="nav-link-text" data-i18n="nav.pages_profile">Profile</span>
            </a>
          </li>
          <li>
            <a href="page_projects.html" title="Projects" data-filter-tags="pages projects">
              <span class="nav-link-text" data-i18n="nav.pages_projects">Projects</span>
            </a>
          </li>
          <li>
            <a href="page_search.html" title="Search Results" data-filter-tags="pages search results">
              <span class="nav-link-text" data-i18n="nav.pages_search_results">Search Results</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
    <div class="filter-message js-filter-message bg-success-600"></div>
  </nav>
  <!-- END PRIMARY NAVIGATION -->
  <!-- NAV FOOTER -->
  <div class="nav-footer shadow-top">
    <a href="#" onclick="return false;" data-action="toggle" data-class="nav-function-minify" class="hidden-md-down">
      <i class="ni ni-chevron-right"></i>
      <i class="ni ni-chevron-right"></i>
    </a>
    <ul class="list-table m-auto nav-footer-buttons">
      <li>
        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Chat logs">
          <i class="fal fa-comments"></i>
        </a>
      </li>
      <li>
        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Support Chat">
          <i class="fal fa-life-ring"></i>
        </a>
      </li>
      <li>
        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Make a call">
          <i class="fal fa-phone"></i>
        </a>
      </li>
    </ul>
  </div> <!-- END NAV FOOTER -->
</aside>
<!-- END Left Aside -->
