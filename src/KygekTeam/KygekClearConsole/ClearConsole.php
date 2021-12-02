<?php

/*
 * Clear server console using command
 * Copyright (C) 2021 KygekTeam
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 */

declare(strict_types=1);

namespace KygekTeam\KygekClearConsole;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\console\ConsoleCommandSender;
use pocketmine\event\Listener;
use pocketmine\event\server\DataPacketSendEvent;
use pocketmine\network\mcpe\protocol\AvailableCommandsPacket;
use pocketmine\network\mcpe\protocol\types\command\CommandData;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as TF;

class ClearConsole extends PluginBase implements Listener {

    private const IS_DEV = false;

    private const COMMAND = "clearconsole";
    private const CLEAR_CONSOLE_STRING = "\e[H\e[J";

    protected function onEnable() : void {
        /** @phpstan-ignore-next-line */
        if (self::IS_DEV) {
            $this->getLogger()->warning("This plugin is running on a development version. There might be some major bugs. If you found one, please submit an issue in https://github.com/KygekTeam/KygekClearConsole/issues.");
        }
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool {
        if ($command->getName() === self::COMMAND) {
            if (!$sender instanceof ConsoleCommandSender) {
                $sender->sendMessage($this->getServer()->getLanguage()->translateString(TF::RED . "%commands.generic.notFound"));
                return true;
            }
            echo self::CLEAR_CONSOLE_STRING;
        }
        return true;
    }

    /**
     * @priority HIGHEST
     */
    public function onPacketSend(DataPacketSendEvent $event) {
        $pk = $event->getPackets();
        if ($pk instanceof AvailableCommandsPacket) {
            $pk->commandData = array_filter($pk->commandData, function (CommandData $data) : bool {
                return $data->commandName !== self::COMMAND;
            });
        }
    }

}