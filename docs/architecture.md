# storykōbō architecture

## Current direction

The current application direction is:

- **PHP**
- **Laravel**
- **MySQL or MariaDB**
- server-rendered HTML with CSS and JavaScript where appropriate

This is a direction, not a promise that every future component must use the same technology.

## Core architectural principle

**storykōbō owns the community identity.**

The forum, Discord, events, projects, and integrations are components around that identity.

They should not become separate user-account silos.

## Planned foundation

The initial domain model is expected to grow around concepts such as:

- users
- profiles
- usernames
- roles
- ranks
- groups
- group memberships
- projects
- project updates
- activity
- forums
- threads
- posts
- events
- teams
- achievements
- flair
- notifications
- moderation actions

This is a conceptual list, not yet a final database schema.

## Identity

A user should have:

1. a permanent internal numeric ID
2. an account
3. a claimable public username
4. a public profile URL

The intended public profile pattern is:

`/@username`

An initial account may be identifiable internally as something like:

`/user/90483`

The numeric ID should remain stable if a username changes.

## Activity versus achievements

These systems are deliberately separate.

**Activity** records things a person does:

- creates a project
- posts in a forum
- replies
- comments
- gives a cheer
- joins a group
- participates in an event

**Achievements** represent accomplishments or participation milestones.

An achievement may produce an activity item when earned, but it is not itself merely an activity record.

## Roles, ranks, groups, and flair

These concepts should not be collapsed into one generic status field.

- **Role** — permissions and responsibilities
- **Rank** — user progression or community standing
- **Group** — membership or contextual affiliation
- **Achievement** — accomplishment or participation history
- **Flair** — visual identifier
- **Team** — a type of group affiliation, often temporary or event-specific

## Portability

The application should avoid unnecessary dependence on a specific hosting provider.

Important practices will include:

- source code in Git
- database migrations
- configuration through environment variables
- documented deployment steps
- application-level integrations rather than provider-specific assumptions
- reliable backups
- exportable user/community data

## Security

Security-sensitive systems should use Laravel's established mechanisms wherever possible rather than custom cryptography or authentication implementations.

Production deployment will eventually need additional review for:

- authentication
- authorization
- file uploads
- moderation
- privacy
- rate limiting
- email
- payments
- backups
- logging
- dependency security
- infrastructure configuration

Those concerns are part of the architecture, but they do not all need to be implemented in the first milestone.
