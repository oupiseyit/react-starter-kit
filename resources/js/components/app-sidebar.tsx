'use client';

import { Bot, Grid, Link, Settings2 } from 'lucide-react';
import type * as React from 'react';

import {
    Sidebar,
    SidebarContent,
    SidebarFooter,
    SidebarHeader,
    SidebarMenu,
    SidebarMenuButton,
    SidebarMenuItem,
    SidebarRail,
} from '@/components/ui/sidebar';
import AppLogo from './app-logo';
import { NavMain } from './nav-main';
import { NavUser } from './nav-user';

// This is sample data.
const data = {
    navMain: [
        {
            title: 'Dashboard',
            url: '/',
            icon: Grid,
        },
        {
            title: 'Management',
            url: '/management',
            icon: Bot,
            isActive: false,
            items: [
                {
                    title: 'Keys',
                    url: '/management/keys',
                    icon: Settings2,
                },
                {
                    title: 'Games',
                    url: '/management/games',
                    icon: Settings2,
                },
                {
                    title: 'Genres',
                    url: '/management/genres',
                    icon: Settings2,
                },
                {
                    title: 'Platform ',
                    url: '/management/platform',
                    icon: Settings2,
                },
                {
                    title: 'Dimensionality ',
                    url: '/management/dimensionality',
                    icon: Settings2,
                },
                {
                    title: 'Developers',
                    url: '/management/developers',
                    icon: Settings2,
                },
            ],
        },
        {
            title: 'Settings',
            url: '#',
            icon: Settings2,
            items: [
                {
                    title: 'User',
                    url: '/settings/user',
                    icon: Settings2,
                },
                {
                    title: 'Roles',
                    url: '/settings/roles',
                    icon: Settings2,
                },
                {
                    title: 'Perimissions',
                    url: '/settings/permissions',
                    icon: Settings2,
                },
            ],
        },
    ],
};

export function AppSidebar({ ...props }: React.ComponentProps<typeof Sidebar>) {
    return (
        <Sidebar collapsible="icon" variant="inset">
            <SidebarHeader>
                <SidebarMenu>
                    <SidebarMenuItem>
                        <SidebarMenuButton size="lg" asChild>
                            <Link href="/dashboard">
                                <AppLogo />
                            </Link>
                        </SidebarMenuButton>
                    </SidebarMenuItem>
                </SidebarMenu>
            </SidebarHeader>

            <SidebarContent>
                <NavMain items={data.navMain} />
            </SidebarContent>
            <SidebarFooter>
                <NavUser />
            </SidebarFooter>
            <SidebarRail />
        </Sidebar>
    );
}
