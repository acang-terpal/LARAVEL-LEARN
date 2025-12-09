@section("sidebar_main")
<!-- main sidebar -->
<aside id="sidebar_main">

    <div class="sidebar_main_header">
        <div class="sidebar_logo">
            <a href="index" class="sSidebar_hide sidebar_logo_large">
                <img class="logo_regular" src="altair/assets/img/logo_main.png" alt="" height="15" width="71"/>
                <img class="logo_light" src="altair/assets/img/logo_main_white.png" alt="" height="15" width="71"/>
            </a>
            <a href="index" class="sSidebar_show sidebar_logo_small">
                <img class="logo_regular" src="altair/assets/img/logo_main_small.png" alt="" height="32" width="32"/>
                <img class="logo_light" src="altair/assets/img/logo_main_small_light.png" alt="" height="32" width="32"/>
            </a>
        </div>
        <div class="sidebar_actions">
            <select id="lang_switcher" name="lang_switcher">
                <option value="gb" selected>English</option>
            </select>
        </div>
    </div>

    <div class="menu_section">
        <ul>
            <li php? class="{{ $activeSidebarMain == "dashboard" ? "current_section" : ""}}" title="{{ $activeSidebarMain == "dashboard" ? "Dashboard" : ""}}">
                <a href="index">
                    <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                    <span class="menu_title">Dashboard</span>
                </a>
            </li>
            <li title="Mailbox" class="{{ $activeSidebarMain == "mailbox" ? "current_section" : ""}}" title="{{ $activeSidebarMain == "mailbox" ? "MailBox" : ""}}" >
                <a href="mailbox">
                    <span class="menu_icon"><i class="material-icons">&#xE158;</i></span>
                    <span class="menu_title">Mailbox</span>
                </a>
            </li>
            <li title="Invoices">
                <a href="page_invoices">
                    <span class="menu_icon"><i class="material-icons">&#xE53E;</i></span>
                    <span class="menu_title">Invoices</span>
                </a>
            </li>
            <li title="Chat">
                <a href="page_chat">
                    <span class="menu_icon"><i class="material-icons">&#xE0B9;</i></span>
                    <span class="menu_title">Chat</span>
                </a>
            </li>
            <li title="Scrum Board">
                <a href="page_scrum_board">
                    <span class="menu_icon"><i class="material-icons">&#xE85C;</i></span>
                    <span class="menu_title">Scrum Board</span>
                </a>
            </li>
            <li title="Snippets">
                <a href="page_snippets">
                    <span class="menu_icon"><i class="material-icons">&#xE86F;</i></span>
                    <span class="menu_title">Snippets</span>
                </a>
            </li>
            <li title="User Profile">
                <a href="page_user_profile">
                    <span class="menu_icon"><i class="material-icons">&#xE87C;</i></span>
                    <span class="menu_title">User Profile</span>
                </a>
            </li>
            <li title="Forms">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE8D2;</i></span>
                    <span class="menu_title">Forms</span>
                </a>
                <ul>
                    <li><a href="forms_regular">Regular Elements</a></li>
                    <li><a href="forms_advanced">Advanced Elements</a></li>
                    <li><a href="forms_dynamic">Dynamic</a></li>
                    <li><a href="forms_file_input">File Input</a></li>
                    <li><a href="forms_file_upload">File Upload</a></li>
                    <li><a href="forms_validation">Validation</a></li>
                    <li><a href="forms_wizard">Wizard</a></li>
                    <li class="menu_subtitle">WYSIWYG Editors</li>
                    <li><a href="forms_wysiwyg_ckeditor">CKeditor</a></li>
                    <li><a href="forms_wysiwyg_inline">Ckeditor Inline</a></li>
                    <li><a href="forms_wysiwyg_tinymce">TinyMCE</a></li>
                </ul>
            </li>
            <li title="Layout">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE8F1;</i></span>
                    <span class="menu_title">Layout</span>
                </a>
                <ul>
                    <li><a href="layout_top_menu">Top Menu</a></li>
                    <li><a href="layout_header_full">Full Header</a></li>
                </ul>
            </li>
            <li title="Kendo UI Widgets">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE1BD;</i></span>
                    <span class="menu_title">Kendo UI Widgets</span>
                </a>
                <ul>
                    <li><a href="kendoui_autocomplete">Autocomplete</a></li>
                    <li><a href="kendoui_calendar">Calendar</a></li>
                    <li><a href="kendoui_colorpicker">ColorPicker</a></li>
                    <li><a href="kendoui_combobox">ComboBox</a></li>
                    <li><a href="kendoui_datepicker">DatePicker</a></li>
                    <li><a href="kendoui_datetimepicker">DateTimePicker</a></li>
                    <li><a href="kendoui_dropdown_list">DropDownList</a></li>
                    <li><a href="kendoui_masked_input">Masked Input</a></li>
                    <li><a href="kendoui_menu">Menu</a></li>
                    <li><a href="kendoui_multiselect">MultiSelect</a></li>
                    <li><a href="kendoui_numeric_textbox">Numeric TextBox</a></li>
                    <li><a href="kendoui_panelbar">PanelBar</a></li>
                    <li><a href="kendoui_timepicker">TimePicker</a></li>
                    <li><a href="kendoui_toolbar">Toolbar</a></li>
                    <li><a href="kendoui_window">Window</a></li>
                </ul>
            </li>
            <li title="Components">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE87B;</i></span>
                    <span class="menu_title">Components</span>
                </a>
                <ul>
                    <li><a href="components_accordion">Accordions</a></li>
                    <li><a href="components_autocomplete">Autocomplete</a></li>
                    <li><a href="components_breadcrumbs">Breadcrumbs</a></li>
                    <li><a href="components_buttons">Buttons</a></li>
                    <li><a href="components_fab">Buttons: FAB</a></li>
                    <li><a href="components_cards">Cards</a></li>
                    <li><a href="components_colors">Colors</a></li>
                    <li><a href="components_common">Common</a></li>
                    <li><a href="components_dropdowns">Dropdowns</a></li>
                    <li><a href="components_dynamic_grid">Dynamic Grid</a></li>
                    <li><a href="components_footer">Footer</a></li>
                    <li><a href="components_grid">Grid</a></li>
                    <li><a href="components_icons">Icons</a></li>
                    <li><a href="components_modal">Lightbox/Modal</a></li>
                    <li><a href="components_lists">Lists</a></li>
                    <li><a href="components_nestable">Nestable</a></li>
                    <li><a href="components_notifications">Notifications</a></li>
                    <li><a href="components_panels">Panels</a></li>
                    <li><a href="components_preloaders">Preloaders</a></li>
                    <li><a href="components_slider">Slider</a></li>
                    <li><a href="components_slideshow">Slideshow</a></li>
                    <li><a href="components_sortable">Sortable</a></li>
                    <li><a href="components_switcher">Switcher</a></li>
                    <li><a href="components_tables">Tables</a></li>
                    <li><a href="components_tables_examples">Tables Examples</a></li>
                    <li><a href="components_tabs">Tabs</a></li>
                    <li><a href="components_tooltips">Tooltips</a></li>
                    <li><a href="components_typography">Typography</a></li>
                </ul>
            </li>
            <li title="E-commerce">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE8CB;</i></span>
                    <span class="menu_title">E-commerce</span>
                </a>
                <ul>
                    <li><a href="ecommerce_product_details">Product Details</a></li>
                    <li><a href="ecommerce_product_edit">Product Edit</a></li>
                    <li><a href="ecommerce_products_grid">Products Grid</a></li>
                    <li><a href="ecommerce_products_list">Products List</a></li>
                </ul>
            </li>
            <li title="Plugins">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE8C0;</i></span>
                    <span class="menu_title">Plugins</span>
                </a>
                <ul>
                    <li><a href="plugins_calendar">Calendar</a></li>
                    <li><a href="plugins_charts">Charts</a></li>
                    <li><a href="plugins_code_editor">Code Editor</a></li>
                    <li><a href="plugins_crud_table">CRUD Table</a></li>
                    <li><a href="plugins_datatables">Datatables</a></li>
                    <li><a href="plugins_diff">Diff View</a></li>
                    <li><a href="plugins_filemanager">File Manager</a></li>
                    <li><a href="plugins_gantt_chart">Gantt Chart</a></li>
                    <li><a href="plugins_google_maps">Google Maps</a></li>
                    <li><a href="plugins_idle_timeout">Idle Timeout</a></li>
                    <li><a href="plugins_tour">Tour</a></li>
                    <li><a href="plugins_tablesorter">Tablesorter</a></li>
                    <li><a href="plugins_tree">Tree</a></li>
                    <li><a href="plugins_vector_maps">Vector Maps</a></li>
                </ul>
            </li>
            <li title="Pages">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE24D;</i></span>
                    <span class="menu_title">Pages</span>
                </a>
                <ul>
                    <li><a href="page_blank">Blank</a></li>
                    <li><a href="page_contact_list">Contact List</a></li>
                    <li><a href="page_gallery">Gallery</a></li>
                    <li><a href="page_help">Help/Faq</a></li>
                    <li><a href="login">Login Page</a></li>
                    <li><a href="page_notes">Notes</a></li>
                    <li><a href="page_pricing_tables">Pricing Tables</a></li>
                    <li><a href="page_search_results">Search Results</a></li>
                    <li><a href="page_settings">Settings</a></li>
                    <li><a href="page_todo">Todo</a></li>
                    <li><a href="page_user_edit">User edit</a></li>
                    <li class="menu_subtitle">Issue Tracker</li>
                    <li><a href="page_issues_list">List View</a></li>
                    <li><a href="page_issue_details">Issue Details</a></li>
                    <li class="menu_subtitle">Blog</li>
                    <li><a href="page_blog_list">Blog List</a></li>
                    <li><a href="page_blog_article">Blog Article</a></li>
                    <li class="menu_subtitle">Errors</li>
                    <li><a href="error_404">Error 404</a></li>
                    <li><a href="error_500">Error 500</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE241;</i></span>
                    <span class="menu_title">Multi level</span>
                </a>
                <ul>
                    <li>
                        <a href="#">First level</a>
                        <ul>
                            <li>
                                <a href="#">Second Level</a>
                                <ul>
                                    <li>
                                        <a href="#">Third level</a>
                                    </li>
                                    <li>
                                        <a href="#">Third level</a>
                                    </li>
                                    <li>
                                        <a href="#">Third level</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Long title to test</a>
                                <ul>
                                    <li>
                                        <a href="#">Third level</a>
                                    </li>
                                    <li>
                                        <a href="#">Third level</a>
                                    </li>
                                    <li>
                                        <a href="#">Third level</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Even longer title multi line</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside><!-- main sidebar end -->
@endsection