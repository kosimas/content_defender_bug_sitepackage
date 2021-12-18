Sitepackage for the project "content defender bug sitepackage"
==============================================================

This typo3 extension is for reproducing a bug in the ichhabrecht/content-defender:3.2.1 extension.

The bug ist causing IRRE elements that have a invalid column and relational records, that have a CType which is disallowed on column 0 inside the backend template, to cause weird bahaviour.
I created a backendlayout "2Columns" which has "text" elements disallowed on colPos 0. I also created
a content element "Text Tabs" which can hold multiple "text" elements.
If we create a new page that has the backendlayout "2Columns" and create a "Text Tabs" element inside the Right Content, creating text elements inside the "Text Tabs" will not work properly. The selected CType is "header" and after saving the record it gets saved wrong into the tt_content table.
If we stop disallowing text elements on colPos 0, everything works as expected.