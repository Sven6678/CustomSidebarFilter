<?php

namespace CustomSidebarFilter\Widgets;

use Plenty\Modules\Widget\Widgets\BaseWidget;
use Plenty\Modules\Widget\DataContracts\WidgetPreset;

class SidebarFilterWidget extends BaseWidget
{
    public function getWidgetData()
    {
        return [];
    }

    public function getPreview($widgetSettings, $allSettings)
    {
        return 'Sidebar Filter Vorschau';
    }

    public function getPreset(): WidgetPreset
    {
        return new WidgetPreset('CustomSidebarFilter::SidebarFilter.twig');
    }
}
