# storykobo

**storykobo** is an independent creative community platform for making, sharing, discovering, and connecting.

It is being developed by **tlc storyworks** as a long-term home for creative people and creative work.

## Project status

storykobo is currently in the **foundation and architecture** phase.

The first goal is not to build every feature at once. We are establishing a clean, portable foundation that can grow into a community platform with native identity, profiles, projects, groups, activity, forums, events, and creative tools.

## Guiding ideas

- Adult community: storykobo is intended for people **18 and older**.
- Creative breadth: writing is part of the community, but not the limit of it.
- Third place: the experience should feel welcoming like a library, workshop, archive, or other creative third place.
- Community over competition: participation and encouragement matter more than leaderboards or status contests.
- Native identity: storykobo owns its user identity rather than treating a forum or Discord account as the primary identity.
- Modular growth: major systems should be understandable, replaceable, and extensible.
- Portable infrastructure: the application should not depend unnecessarily on one hosting provider.
- Accessibility and customization: the interface should support different needs and preferences rather than assuming one aesthetic works for everyone.

## Documentation

- [Vision](docs/vision.md)
- [Architecture](docs/architecture.md)
- [Terminology](docs/terminology.md)
- [Community Model](docs/community-model.md)
- [Roadmap](docs/roadmap.md)

## Development

The application layer is planned around **Laravel + PHP + MySQL/MariaDB**, with a server-rendered approach where practical.

The initial technical milestone is intentionally small:

> Create an account → receive a permanent numeric user ID → claim a username → access a public profile.

Everything else can grow from that foundation.

---

storykobo is a tlc storyworks project.
