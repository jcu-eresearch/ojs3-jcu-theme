# OJS 3 JCU Theme

This is a custom theme designed for JCU's instance of OJS 3. It extends the
default theme in OJS.

## Installation

```sh
cd {your_ojs_path_here}/plugins/themes
git clone https://github.com/jcu-eresearch/ojs3-jcu-theme jcu-theme
```

After you've cloned the repo, login to OJS and go to the plugin settings for
the journal and enable the theme. Then, go to the theme settings for that
journal and choose `JCU Theme`.

## Upgrading

Occasionally, some templates within this theme may need to be updated.  Do a
`diff` between the `.tpl` files located here with their counterparts within
the official OJS source code.  Merge any changes together and commit the
result; some changes may be required to handle object, data or API functional
changes between OJS version.
