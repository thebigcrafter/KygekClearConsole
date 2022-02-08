<?php

/*
 * Clear server console using command
 * Copyright (C) 2021-2022 KygekTeam
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 */

declare(strict_types=1);

namespace KygekTeam\KygekClearConsole;

use KygekTeam\KtpmplCfs\KtpmplCfs;
use pocketmine\console\ConsoleCommandSender;
use pocketmine\event\Listener;
use pocketmine\event\server\CommandEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as TF;

class ClearConsole extends PluginBase implements Listener {

    private const IS_DEV = false;

    private const COMMAND = ["clearconsole", "cc"];
    private const CLEAR_CONSOLE_STRING = "\e[H\e[J";

    protected function onEnable() : void {
        /** @phpstan-ignore-next-line */
        if (self::IS_DEV) {
            (new KtpmplCfs($this))->warnDevelopmentVersion();
        }
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    /**
     * @priority HIGHEST
     */
    public function onCommandEvent(CommandEvent $event) {
        if (in_array(mb_strtolower($event->getCommand()), self::COMMAND)) {
            if ($event->getSender() instanceof ConsoleCommandSender) {
                self::clear();
                // Prevent unexpected outputs
                $event->cancel();
            }
        }
    }

    /**
     * Clears the server console by printing a special string
     * @return void
     */
    public static function clear() {
        echo self::CLEAR_CONSOLE_STRING;
    }

}