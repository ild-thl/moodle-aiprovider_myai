# MyAI AI Provider for Moodle

`aiprovider_myai` is an AI provider plugin for Moodle that uses the core AI interfaces and provides multiple AI actions.

## Purpose

The plugin integrates an external AI service as a Moodle AI provider and currently supports:

- Text generation
- Text summarisation
- Image generation
- PDF content extraction
- Text-to-speech

## Requirements

- Moodle `4.5` or newer (according to `version.php`)
- A valid API key for the configured AI service
- Network access to the configured API endpoints

## Installation

1. Place the plugin code in `ai/provider/myai` in your Moodle root directory.
2. Log in to Moodle as an administrator.
3. Run the upgrade:
   - Web: `Site administration > Notifications`
   - or CLI: `php admin/cli/upgrade.php`
4. Verify that the plugin `aiprovider_myai` was installed successfully.

## Configuration

Settings are available in Moodle administration under the AI provider settings for this plugin.

Minimum required setting:

- `API key` (`aiprovider_myai/apikey`)

Optional settings:

- `AI organization ID` (`aiprovider_myai/orgid`)
- Site-wide rate limit (per hour)
- Per-user rate limit (per hour)
- Action-specific model and endpoint settings

Notes:

- Without an API key, the provider is considered not configured.
- Endpoints and model names should only be changed if the target API is compatible.

## Supported AI Actions

The plugin registers the following actions:

- `core_ai\aiactions\generate_text`
- `core_ai\aiactions\summarise_text`
- `core_ai\aiactions\generate_image`
- `aiprovider_myai\aiactions\extract_pdf`
- `aiprovider_myai\aiactions\text_to_speech`

### Action-Specific Configuration

#### `myai_extract_pdf`

Configurable settings:

- Model: `aiprovider_myai/action_extract_pdf_model`
- API endpoint: `aiprovider_myai/action_extract_pdf_endpoint`
- System instruction: `aiprovider_myai/action_extract_pdf_systeminstruction`

#### `myai_text_to_speech`

Configurable settings:

- Model: `aiprovider_myai/action_text_to_speech_model`
- API endpoint: `aiprovider_myai/action_text_to_speech_endpoint`

Currently not configurable via admin settings (hardcoded in the request):

- Voice: `alloy`
- Audio format: `mp3`
- Speed: `1.0`

## Privacy

The plugin provides a privacy provider implementation (`classes/privacy/provider.php`) and documents data transfer to an external service.

According to the plugin metadata, no additional personal data is stored in Moodle by this plugin. However, prompts and related metadata may be transferred to the configured external AI service.

Operational recommendations:

- Review privacy information and contractual requirements for the AI service in use.
- Send only the minimum data required for the use case.
- Inform end users transparently about external data processing.

## Versioning and Compatibility

Current plugin metadata:

- Component: `aiprovider_myai`
- Release: `1.0`
- Version: `2026042100`
- Minimum Moodle version (`requires`): `2024100700`
- Supported Moodle branches (`supported`): `4.5` to `5.1`
- Maturity: `MATURITY_STABLE`

## Development

Recommended before release:

- Validate PHP code against Moodle coding standards
- Test the plugin in a Moodle 4.5 instance
- Validate AI actions with valid credentials and production endpoint configuration

## License

GNU GPL v3 or later.