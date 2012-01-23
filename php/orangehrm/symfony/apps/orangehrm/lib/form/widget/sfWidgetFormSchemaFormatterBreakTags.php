<?php

class sfWidgetFormSchemaFormatterBreakTags extends sfWidgetFormSchemaFormatter {

    protected $rowFormat = "%label%\n  %field%%help%\n%hidden_fields%<br class=\"clear\">%error%\n";
    protected $errorRowFormat = "<span>\n%errors%</span>\n";
    protected $helpFormat = '<br />%help%';
    protected $decoratorFormat = "<form>\n  %content%</form>";

}
