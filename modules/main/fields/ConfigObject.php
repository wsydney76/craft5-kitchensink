<?php

namespace modules\main\fields;

use Craft;
use craft\base\ElementInterface;
use craft\base\Field;
use craft\base\InlineEditableFieldInterface;
use craft\base\SortableFieldInterface;
use craft\elements\db\ElementQueryInterface;
use craft\enums\CmsEdition;
use craft\helpers\Cp;
use craft\helpers\Html;
use craft\helpers\StringHelper;
use yii\db\ExpressionInterface;
use yii\db\Schema;
use function collect;

/**
 * Config Object field type
 */
class ConfigObject extends Field implements InlineEditableFieldInterface, SortableFieldInterface
{

    public string $configObjectType = 'site';
    public bool $addAllOption = false;

    public static function displayName(): string
    {
        return 'Config Object';
    }

    public static function icon(): string
    {
        return 'gear';
    }

    public static function phpType(): string
    {
        return 'string';
    }

    public static function dbType(): array|string|null
    {
        // Replace with the appropriate data type this field will store in the database,
        // or `null` if the field is managing its own data storage.
        return Schema::TYPE_STRING;
    }

    public function attributeLabels(): array
    {
        return array_merge(parent::attributeLabels(), [
            // ...
        ]);
    }

    protected function defineRules(): array
    {
        return array_merge(parent::defineRules(), [
            // ...
        ]);
    }

    public function getSettingsHtml(): ?string
    {

        $options = [
            ['label' => 'Site', 'value' => 'site'],
            ['label' => 'Site Group', 'value' => 'siteGroup'],
            ['label' => 'Section', 'value' => 'section'],
            ['label' => 'Entry Type', 'value' => 'entryType'],
            ['label' => 'Field', 'value' => 'field'],
            ['label' => 'Volume', 'value' => 'volume'],
        ];

        if (Craft::$app->edition === CmsEdition::Pro) {
            $options[] = ['label' => 'User Group', 'value' => 'userGroup'];
        }

        return Cp::selectFieldHtml([
                'label' => 'Config Object',
                'instructions' => 'Select the configuration object to include.',
                'id' => 'configObjectType',
                'name' => 'configObjectType',
                'value' => $this->configObjectType,
                'errors' => $this->getErrors('configObjectType'),
                'options' => $options,
            ]) .
            Cp::lightswitchFieldHtml([
                'label' => 'Add All Option',
                'id' => 'addAllOption',
                'name' => 'addAllOption',
                'on' => $this->addAllOption,
                'errors' => $this->getErrors('addAllOption'),
                'instructions' => 'Whether to add an "All" option to the select.',
            ]);
    }

    public function normalizeValue(mixed $value, ?ElementInterface $element): mixed
    {
        return $value;
    }

    protected function inputHtml(mixed $value, ?ElementInterface $element, bool $inline): string
    {
        switch ($this->configObjectType) {
            case 'site':
                $options = Craft::$app->getSites()->getAllSites();
                break;
            case 'section':
                $options = Craft::$app->getEntries()->getAllSections();
                break;
            case 'entryType':
                $options = Craft::$app->getEntries()->getAllEntryTypes();
                break;
            case 'siteGroup':
                $options = Craft::$app->getSites()->getAllGroups();
                break;
            case 'field':
                $options = Craft::$app->getFields()->getAllFields();
                break;
            case 'userGroup':
                $options = Craft::$app->getUserGroups()->getAllGroups();
                break;
            case 'volume':
                $options = Craft::$app->getVolumes()->getAllVolumes();
                break;
        }

        switch ($this->configObjectType) {
            case 'siteGroup':
                $options = collect($options)
                    ->map(fn($options) => [
                        'label' => $options->name,
                        'value' => $options->name,
                    ]);
                break;
            default:
                $options = collect($options)
                    ->map(fn($options) => [
                        'label' => $options->name,
                        'value' => $options->handle,
                    ]);
                break;
        }

        if ($this->addAllOption) {
            $options = $options->prepend([
                'label' => Craft::t('app', 'All'),
                'value' => '',
            ])->toArray();
        }


        return Cp::selectHtml([
            'name' => $this->handle,
            'value' => $value ?? $options[0]['value'] ?? null,
            'options' => $options,
        ]);
    }

    public function getElementValidationRules(): array
    {
        return [];
    }

    protected function searchKeywords(mixed $value, ElementInterface $element): string
    {
        return StringHelper::toString($value, ' ');
    }

    public function getElementConditionRuleType(): array|string|null
    {
        return null;
    }

    public static function queryCondition(
        array $instances,
        mixed $value,
        array &$params,
    ): ExpressionInterface|array|string|false|null {
        return parent::queryCondition($instances, $value, $params);
    }
}
