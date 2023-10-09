<?php

/**
 * ---------------------------------------------------------------------
 *
 * GLPI - Gestionnaire Libre de Parc Informatique
 *
 * http://glpi-project.org
 *
 * @copyright 2015-2023 Teclib' and contributors.
 * @copyright 2003-2014 by the INDEPNET Development Team.
 * @licence   https://www.gnu.org/licenses/gpl-3.0.html
 *
 * ---------------------------------------------------------------------
 *
 * LICENSE
 *
 * This file is part of GLPI.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 * ---------------------------------------------------------------------
 */

$discoverConfig = [
    "version" => "0.0.1",
    "startingLesson" => "intro",
    "lessons" => [
        [
            "id" => "intro",
            "title" => __("Introduction"),
            "points" => 10,
            "steps" => [
                [
                    "title" => __("Introduction"),
                    "content" => "file://introduction.md",
                    "tooltipClass" => "large-tooltip",
                ]
            ]
        ],
        [
            "id" => "menus",
            "title" => __("Menus of GLPI"),
            "category" => "basics",
            "description" => __("Let discover the menus of GLPI"),
            "points" => 10,
            "navigateTo" => "front/central.php",
            "steps" => [
                [
                    "element" => "#navbar-menu .nav-item.dropdown:first-child",
                    "tooltipPosition" => "right",
                    "title" => __("Assets"),
                    "content" => __("This menu contains all the **assets** management")
                ],
                [
                    "element" => "#navbar-menu .nav-item.dropdown:nth-child(2)",
                    "tooltipPosition" => "right",
                    "title" => __("Assistance"),
                    "content" => __("This menu contains all things related to **assistance**")
                ]
            ]
        ],
        [
            "id" => "create-ticket",
            "title" => __("Create a ticket"),
            "category" => "assistance",
            "description" => __("Create our first ticket"),
            "points" => 10,
            "navigateTo" => "front/ticket.php",
            "steps" => [
                [
                    "title" => __("Empty ticket page"),
                    "content" => "file://assistance/empty-ticket-page.md"
                ],
                [
                    "element" => "#top-menu #add",
                    "title" => __("Create a ticket"),
                    "content" => "file://assistance/create-ticket.md"
                ]
            ]
        ]
    ]
];
