# TheSource-theme

WordPress theme for PAUSATF website

## Overview

This repository is part of the PAUSATF GitHub organization, which follows a consolidated repository structure:

- [wordpress-site](https://github.com/pausatf/wordpress-site): Main WordPress codebase
- [infrastructure](https://github.com/pausatf/infrastructure): Infrastructure, deployment, and monitoring code
- [content-assets](https://github.com/pausatf/content-assets): Content, media, and backups
- [pausatf-docs](https://github.com/pausatf/pausatf-docs): Comprehensive documentation
- [TheSource-theme](https://github.com/pausatf/TheSource-theme): WordPress theme

## Development Workflow

This repository follows the GitHub Flow process:

1. **Create a Branch**
   - Branch from `main`
   - Use descriptive branch names: `feature/feature-name`, `fix/bug-name`, `docs/doc-change`

2. **Add Commits**
   - Make focused, incremental changes
   - Follow the commit message template: `<type>(<scope>): <subject>`
   - Keep commits small and focused on a single task

3. **Open a Pull Request**
   - Open a PR early for discussion
   - Use the PR template
   - Reference any related issues

4. **Review and Discussion**
   - At least one approval required
   - Address all feedback
   - All status checks must pass
   - All conversations must be resolved

5. **Merge**
   - Squash and merge to keep history clean
   - Delete branch after merging

For more details, see the [GitHub Flow Guide](.github/docs/github-flow-guide.md).

## Getting Started

### Prerequisites

- Git
- PHP 7.4+
- Node.js and npm
- WordPress development environment

### Installation

```bash
# Clone the repository
git clone https://github.com/pausatf/TheSource-theme.git
cd TheSource-theme

# Initialize and update submodules (if applicable)
git submodule update --init --recursive

# # Install dependencies
npm install

# Build assets
npm run build
```

## Contributing

Please read our [Contributing Guide](.github/CONTRIBUTING.md) for details on our code of conduct and the process for submitting pull requests.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
