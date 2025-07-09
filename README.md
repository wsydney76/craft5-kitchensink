# Craft 5 Kitchen Sink

A Craft CMS 5 project with a focus on demonstrating various field types and settings.

Created as part of a master's thesis on content modeling in the context of various content management systems, especially field types/complex content types and their settings as building blocks for content modeling and a smooth authoring experience/content governance.

May also serve as presentation material for Craft CMS 5, showcasing the capabilities of the system to clients.

Inspired by the kitchen sink example in [Kirby 5 playground](https://github.com/wsydney76/kirby5-playground).

## DDEV Installation

* Clone repository
* `cd` into project directory
* Run `bash setup/install <projectname> <username> <password>` (or follow the included steps manually)

Optionally run `ddev craft db/restore setup/seed.sql.zip` to seed the project with example (nonsense) content.
This will create a user with the credentials `admin/craft5-kitchensink`.

## Screenshots

In case you don't want to set up the project, here are the screenshots:

### Content

![Content - Text](_screenshots/content-text.jpg)

![Content - Numbers](_screenshots/content-numbers.jpg)

![Content - Date](_screenshots/content-date.jpg)

![Content - Single Select](_screenshots/content-single-select.jpg)

![Content - Multi Select](_screenshots/content-multi-select.jpg)

![Content - Colors](_screenshots/content-colors.jpg)

![Content - Tables](_screenshots/content-tables.jpg)

![Content - UI Elements](_screenshots/content-ui-elements.jpg)

### Relations

![Relations - Entries](_screenshots/relations-entries.jpg)

![Relations - Images 1](_screenshots/relations-images1.jpg)

![Relations - Images 2](_screenshots/relations-images2.jpg)

![Relations - Links](_screenshots/relations-links.jpg)

### Matrix

Using Matrix for repeatable fields, working around the limitations of Craft's native table field

![Matrix - Repeatable Fields](_screenshots/matrix-repeatable-fields.jpg)

Using Matrix for attributed relationships

![Matrix - Attributed Relationships](_screenshots/matrix-attributes-relationships.jpg)

Using Matrix for content builder

![Matrix - Content Builder](_screenshots/matrix-content-builder.jpg)

Nested...

![Matrix - Content Builder2](_screenshots/matrix-content-builder2.jpg)

Using Matrix for structured data (e.g. the vita of an actress)

![Matrix - Structured Data](_screenshots/matrix-structured-data.jpg)

Using Matrix for multi columns layout

![Matrix - Layout](_screenshots/matrix-layout.jpg)

### Rich Text

AKA CKEditor first party plugin.

Basic usage - just some formatting

![Rich Text - Basic](_screenshots/richtext-basic.jpg)

Advanced usage

![Rich Text - Advanced](_screenshots/richtext-advanced.jpg)

With nested entries

![Rich Text - Nested Entries](_screenshots/richtext-nested.jpg)

### Special Fields

![Special Fields](_screenshots/special-fields.jpg)

![Special Fields - Content Block](_screenshots/special-contentblock.jpg)



