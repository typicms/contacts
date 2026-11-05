<?php

declare(strict_types=1);

namespace TypiCMS\Modules\Contacts\Composers;

use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use TypiCMS\Modules\Sidebar\SidebarGroup;
use TypiCMS\Modules\Sidebar\SidebarItem;
use TypiCMS\Modules\Sidebar\SidebarManager;

class SidebarViewComposer
{
    public function compose(View $view): void
    {
        $sidebar = $view->offsetGet('sidebar');

        if (! $sidebar instanceof SidebarManager) {
            return;
        }

        if (Gate::denies('read contacts')) {
            return;
        }

        $sidebar->group(
            __(config()->string('typicms.modules.contacts.sidebar.group', 'Contacts')),
            function (SidebarGroup $group): void {
                $group->id = 'contacts';
                $group->weight = 20;
                $group->addItem(
                    __(config()->string('typicms.modules.contacts.sidebar.label', 'Contacts')),
                    function (SidebarItem $item): void {
                        $item->id = 'contacts';
                        $item->icon = config()->string('typicms.modules.contacts.sidebar.icon');
                        $item->weight = config()->integer('typicms.modules.contacts.sidebar.weight');
                        $item->route('admin::index-contacts');
                    },
                );
            },
        );
    }
}
