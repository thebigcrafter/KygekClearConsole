<h1 align="center">KygekClearConsole</h1>

<p align="center">
<a href="https://github.com/thebigcrafter/KygekClearConsole/blob/main/LICENSE"><img src="https://img.shields.io/github/license/thebigcrafter/KygekClearConsole?style=for-the-badge" alt="license" /></a>
<a href="https://discord.gg/PykBfE2TZ9"><img src="https://img.shields.io/discord/1087729577004122112?color=7289DA&label=discord&logo=discord&style=for-the-badge" alt="discord" /></a>
</p>

# 📖 About

A PocketMine-MP plugin to clear server console using command. This plugin is roughly equivalent to `cls` command on Windows or `clear` command on Linux.

This plugin is not planned to be released on Poggit, because it may break Rule A1 or A2 (see [Poggit Rules](https://poggit.pmmp.io/rules.edit) for more information, and remember to use common sense!).

# ❔ How Does This Plugin Works

This plugin clears the console when the `clearconsole` command (Alias: `cc`) gets executed. This plugin prints `\e[H\e[J` character to console to clear the console. This plugin ensures the command will only show and work on console by using `CommandEvent` to capture the command and cancelling the event to prevent unexpected outputs (e.g. Unknown command) if the sender is from the console.

# 🧩 Features

- Only works in console
- Command gets hidden in command suggestions and help page (Player)
- Sends unknown command message whenever a player tries to execute the command
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

Licensed under the [GNU General Public License v3.0 license](https://github.com/thebigcrafter/KygekClearConsole/blob/main/LICENSE).
