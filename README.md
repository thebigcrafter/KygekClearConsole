<h1 align="center">KygekClearConsole</h1>

<p align="center">
<a href="https://github.com/thebigcrafter/KygekClearConsole/blob/main/LICENSE"><img src="https://img.shields.io/github/license/thebigcrafter/KygekClearConsole?style=for-the-badge" alt="license" /></a>
<a href="https://discord.gg/PykBfE2TZ9"><img src="https://img.shields.io/discord/1087729577004122112?color=7289DA&label=discord&logo=discord&style=for-the-badge" alt="discord" /></a>
</p>

# 📖 About

A PocketMine-MP plugin that clears the server console with a command. It is roughly equivalent to the `cls` command on Windows or the `clear` command on Linux.

This plugin is not planned to be released on Poggit, because it may break Rule A1 or A2 (see [Poggit Rules](https://poggit.pmmp.io/rules.edit) for more information, and remember to use common sense!).

# ❔ How Does This Plugin Work

This plugin clears the console when the `clearconsole` command (alias: `cc`) is executed. It prints the `\e[H\e[J` control sequence to clear the console. The plugin handles the command through `CommandEvent` and restricts the clear operation to console senders; player attempts are cancelled to avoid unexpected command output.

# 🧩 Features

- Only works in console
- The command is hidden from player command suggestions and help pages
- Sends an unknown-command message when a player tries to execute the command
- API to clear the console (`ClearConsole::clear()`)

# ⬇️ Installation

1. Download the latest version from GitHub Releases or Poggit CI below:
    - Stable version (Recommended for most users): [Latest](https://github.com/thebigcrafter/KygekClearConsole/releases/latest) | [All releases](https://github.com/thebigcrafter/KygekClearConsole/releases)
    - Build version (Only recommended for advanced users): [Poggit CI](https://poggit.pmmp.io/ci/thebigcrafter/KygekClearConsole/~)
2. Drop the downloaded `KygekClearConsole.phar` plugin file into your PocketMine-MP server's `plugins` directory.
3. Restart your server and you're ready to test the plugin!

# 📜 Commands

| Command | Description | Aliases |
| --- | --- | --- |
| `/clearconsole` | Clears server console | `/cc`, `/cls` and `/clr` |

# ⚖️ License

Licensed under the [GNU General Public License v3.0](https://github.com/thebigcrafter/KygekClearConsole/blob/main/LICENSE).
