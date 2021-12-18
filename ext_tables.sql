#
# Add SQL definition of database tables
#
CREATE TABLE tt_content (
    # CE text_tabs
    text_tab_text_elements int(11) unsigned DEFAULT '0' NOT NULL,
    text_tab_text_elements_parent int(11) unsigned DEFAULT '0' NOT NULL,
    KEY text_tab_text_elements_parent (text_tab_text_elements_parent,pid,deleted),
);
