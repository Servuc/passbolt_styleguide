<?php include(dirname(__DIR__) . '../../fixtures/tags.php'); ?>
<div id="js_wsp_password_filter_tags" class="open navigation accordion js_component mad_view ready">
    <ul id="js_wsp_pwd_password_filter_tag_selector" class="accordion-header">
        <li class="open node root">
            <div class="row title">
                <div class="main-cell-wrapper">
                    <div class="main-cell">
                        <h3><a href="#" class="accordion-trigger">Filter by tags</a></h3>
                    </div>
                </div>
                <div class="right-cell more-ctrl mad_component_button_dropdown js_component mad_view_component_button_dropdown enabled">
                    <a id="js_wsp_pwd_password_filter_tags_more" href="#" class="filter"><span>more</span></a>
                    <ul id="js_wsp_pwd_password_filter_tags_more_list" class="dropdown-content mad_component_menu menu mad_view_component_tree ready">
                        <li id="js_filter_tags_section_all_tags_options" class="ready">
                            <div class="row">
                                <div class="main-cell-wrapper">
                                    <div class="main-cell">
                                        <a><span>All tags</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li id="js_filter_tags_section_my_tags_options" class="ready">
                            <div class="row">
                                <div class="main-cell-wrapper">
                                    <div class="main-cell">
                                        <a><span>My tags</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li id="js_filter_tags_section_shared_tags_options" class="ready">
                            <div class="row">
                                <div class="main-cell-wrapper">
                                    <div class="main-cell">
                                        <a><span>Shared tags</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <script type="application/javascript">
                    // SAMPLE INTERACTION - Not for production
                    $(function() {
                        $('#js_wsp_pwd_password_filter_tags_more').click(function(){
                            $('#js_wsp_pwd_password_filter_tags_more_list').toggleClass('visible');
                            return false;
                        });
                    });
                    $('body').click(function(e) {
                        if($(e.target).closest('#js_wsp_pwd_password_filter_tags_more').length === 0) {
                            $('#js_wsp_pwd_password_filter_tags_more_list').removeClass('visible');
                        }
                    });
                </script>
            </div>
        </li>
    </ul>
    <ul id="js_wsp_password_filter_tags_list" class="accordion-content">
<?php foreach ($tags as $i => $tag) : ?>
            <li class="open node root tag-item" id="tag_<?= $tag['id']; ?>" data-view-id="<?= $i; ?>">
                <div class="row">
                    <div class="main-cell-wrapper">
                        <div class="main-cell">
                            <a href="#" title="Leadership team'" data-view-id="<?= $i; ?>"><span><?= $tag['name']; ?></span></a>
                        </div>
                    </div>
                </div>
            </li>
<?php endforeach; ?>
    </ul>
</div>
