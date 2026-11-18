# Internal Development Inventory

> **Purpose:** Working document for planning implementation, learning, testing, and ongoing maintenance. This is an internal planning artifact, not a public delivery promise.
> **Last reviewed:** 2026-11-17  
> **Project status:** Backend development is paused for November planning.  
> **Known stack from project notes:** Laravel 13.35.0 and PHP 8.5.7; verify exact versions against the repository and runtime before relying on them.

## How to use this inventory

This document tracks the work required to deliver a sustainable first version of storykōbō. Keep four kinds of effort distinct:
- **Implementation:** designing and writing the feature.
- **Learning / investigation:** understanding unfamiliar Laravel, PHP, JavaScript, infrastructure, or security concepts.
- **Verification:** automated tests, accessibility review, manual QA, and regression checks.
- **Ongoing care:** maintenance, support, monitoring, and moderation after launch.

All estimates are **initial planning allowances**, not promises or measured estimates. They must be revised after inspecting the current code, migrations, tests, and documentation.

### Status vocabulary
- **Implemented — verified:** evidence exists in code and tests; record the evidence.
- **Partially implemented:** some pieces exist; remaining scope is listed.
- **Needs audit:** current state has not been confirmed.
- **Not started:** no implementation is known.
- **Deferred:** intentionally outside the initial release.
- **Decision needed:** a product or architecture choice must be made first.

### Effort vocabulary
Hours below are rough experienced-developer implementation allowances, including ordinary integration and testing but excluding substantial discovery. Learning / discovery time is separate. A returning developer learning modern Laravel may need materially more time; revise estimates as the codebase and learning curve become clearer.

## Project-wide engineering standards

These apply to every system and are part of implementation, not final cleanup.

| Standard | Required practice | Verification |
|---|---|---|
| Readability | Clear names, consistent formatting, focused methods, avoid clever shortcuts | Coding-standard review |
| Inline documentation | Explain non-obvious intent, business rules, dependencies, and edge cases near the code | Review comments for usefulness and accuracy |
| Architecture | Separate presentation, request handling, business rules, persistence, and authorization | Architecture review |
| System boundaries | Keep groups, teams, projects, events, discussion, and recognition distinct where their rules differ | Dependency review |
| Configuration | Avoid scattered environment-specific values and unexplained magic numbers | Configuration review |
| Database evolution | Schema changes through versioned migrations | Migration tests |
| Security | Validate input, authorize server-side, protect secrets, minimize data exposure | Security review and tests |
| Testing | Automated tests for critical behavior, permissions, and regressions | CI test suite |
| Accessibility | Semantic markup, keyboard access, visible focus, contrast, reduced motion, understandable errors | Accessibility checklist and manual review |
| Dependencies | Deliberate updates; review breaking changes and security advisories | Maintenance log |
| Operations | Backups, restore procedure, error logging, monitoring, deployment and rollback notes | Recovery and deployment checks |
| Change records | Record important technical choices and why they were made | Architecture decision records |

## Current known facts

These are the limited implementation facts established in project discussions, not a substitute for a fresh code audit.
- The Laravel application exists and has been used as the backend foundation.
- Project notes identify Laravel 13.35.0 and PHP 8.5.7; verify against Composer files and the actual runtime.
- Username validation and uniqueness have been implemented and tested.
- Backend development is intentionally paused during November 2026 for planning.
- The public-facing GitHub Pages site and project documentation exist.
- The application is not intended to host or distribute members' creative works.
- Everything else below should be marked **needs audit** until confirmed against the repository.

## System inventory

### A. Platform foundation and delivery

| System / work item | Initial status | Dependencies | Experienced-dev effort | Learning / discovery | Notes / acceptance evidence |
|---|---|---|---:|---:|---|
| Repository and local setup | Partially implemented — audit | None | 4–12 h | 2–8 h | Repeatable setup from a clean checkout |
| Environment configuration and secrets | Needs audit | Hosting choice | 4–10 h | 2–6 h | No secrets committed; documented environment setup |
| Architecture documentation | Needs audit | Repository audit | 6–16 h | 3–8 h | Explain request flow, boundaries, conventions |
| Coding standards and review checklist | Planned | Architecture direction | 3–8 h | 1–3 h | Concise standards and review checklist |
| CI and automated test execution | Needs audit | Test suite, repository config | 6–16 h | 3–8 h | Tests run consistently on changes |
| Deployment and rollback | Needs audit | Hosting, configuration | 8–20 h | 4–12 h | Repeatable deployment and rollback instructions |
| Error logging and monitoring | Needs audit | Hosting | 4–12 h | 2–6 h | Errors can be detected and investigated |
| Backups and recovery | Needs audit | Database and storage choices | 6–16 h | 3–8 h | Automated backups and tested restore procedure |
| Dependency update process | Planned | Composer and frontend inventory | 3–8 h initially | 2–5 h | Regular review and safe update procedure |

### B. Identity, accounts, and access

| System / work item | Initial status | Dependencies | Experienced-dev effort | Learning / discovery | Notes / acceptance evidence |
|---|---|---|---:|---:|---|
| Registration and authentication | Needs audit | Platform foundation | 12–28 h | 5–14 h | Secure registration, login, logout |
| Email verification and password recovery | Needs audit | Authentication, mail provider | 8–18 h | 3–9 h | Reliable verification and recovery flows |
| Permanent member IDs and username rules | Partially implemented — username validation/uniqueness known | Accounts, database | 4–12 h remaining, subject to audit | 2–6 h | Confirm immutable IDs, normalization, reserved names, race-safe uniqueness |
| Member profiles | Needs audit | Accounts, privacy rules | 12–24 h | 5–12 h | Profile fields, public/private visibility, edit flow |
| Pronouns and profile preferences | Needs audit | Profiles | 4–10 h | 2–5 h | Optional fields and respectful display |
| Roles and permissions | Needs audit | Accounts, authorization design | 12–28 h | 5–14 h | Least-privilege roles and tested authorization |
| Account controls and privacy | Needs audit | Accounts, profiles, policies | 10–24 h | 4–12 h | Visibility, deactivation, data handling |
| Blocking and muting | Needs audit | Accounts, posts, discussion, notifications | 10–22 h | 4–10 h | Consistent behavior across surfaces |

### C. Community systems

| System / work item | Initial status | Dependencies | Experienced-dev effort | Learning / discovery | Notes / acceptance evidence |
|---|---|---|---:|---:|---|
| Groups | Needs audit | Accounts, permissions | 20–45 h | 8–22 h | Create, discover, join, leave, manage |
| Group memberships | Needs audit | Groups, permissions | 10–22 h | 4–10 h | Membership states, roles, invitations if needed |
| Group discovery | Needs audit | Groups, privacy | 8–18 h | 3–8 h | Search/filter and visibility rules |
| Short posts (140-character limit) | Needs audit | Accounts, permissions, moderation | 16–32 h | 6–16 h | Character validation, display, deletion, reporting |
| Threaded short posts | Needs audit | Short posts | 10–24 h | 4–12 h | Clear parent/child behavior and nesting limits |
| Cheers / encouragement | Needs audit | Accounts, posts, projects, events | 8–18 h | 3–8 h | Encouragement only; not points, currency, ranking, or popularity |
| Notifications | Needs audit | Accounts, events, groups, discussion | 16–36 h | 7–18 h | In-app preferences and quiet defaults |
| Forum discussions | Needs audit | Accounts, groups, moderation | 24–55 h | 10–26 h | Categories, topics, replies, edit/delete rules |
| Search and discovery | Needs audit | Public entities | 12–30 h | 5–15 h | Define searchable objects and privacy boundaries |

### D. Projects and creative identity

| System / work item | Initial status | Dependencies | Experienced-dev effort | Learning / discovery | Notes / acceptance evidence |
|---|---|---|---:|---:|---|
| Project pages | Needs audit | Accounts, permissions | 18–40 h | 8–20 h | Community descriptions, not creative-work hosting |
| Disciplines, genres, status | Needs audit | Project pages, taxonomy decisions | 8–18 h | 3–9 h | Flexible, maintainable vocabularies |
| External links | Needs audit | Projects, URL validation | 4–10 h | 2–5 h | Creator chooses where work lives; safe URL handling |
| Collaborators | Needs audit | Projects, accounts, permissions | 10–22 h | 4–10 h | Explicit roles and invitation/acceptance rules |
| Project updates and discussion | Needs audit | Projects, posts/forums | 12–28 h | 5–14 h | Community context, not storage for the work itself |

### E. Events, teams, and participation

| System / work item | Initial status | Dependencies | Experienced-dev effort | Learning / discovery | Notes / acceptance evidence |
|---|---|---|---:|---:|---|
| Event records and pages | Needs audit | Accounts, permissions | 14–30 h | 6–15 h | Dates, description, status, participation settings |
| Event participation | Needs audit | Events, accounts | 10–22 h | 4–10 h | Join/leave and visibility preferences |
| Personal goals | Needs audit | Events, participation | 12–26 h | 5–13 h | Flexible measures; no mandatory word-count target |
| Progress sharing and privacy | Needs audit | Goals, posts, permissions | 10–22 h | 4–11 h | Private, team, or community visibility by choice |
| Event-specific teams | Needs audit | Events, accounts, memberships | 18–38 h | 8–19 h | One team per member per event; no rival scoring or rankings |
| Team identity and gathering space | Needs audit | Teams, discussion | 12–26 h | 5–13 h | Team name, visual identity, shared encouragement |
| Event configuration | Needs audit | Event system | 8–18 h | 3–9 h | April revision and November drafting seasons, plus flexible events |

### F. Recognition and community history

| System / work item | Initial status | Dependencies | Experienced-dev effort | Learning / discovery | Notes / acceptance evidence |
|---|---|---|---:|---:|---|
| Award definitions and earning rules | Needs audit | Accounts, events, milestones | 12–26 h | 5–13 h | Explicit, testable, versionable rules |
| Personal awards display | Needs audit | Award definitions, profiles | 8–18 h | 3–9 h | Earned icons full color; unearned icons softly muted |
| Personal event pennants | Needs audit | Events, teams, awards | 14–30 h | 6–15 h | Event field, keepsakes, team/year ribbon |
| Community pennants | Needs audit | Event/community milestones | 10–24 h | 4–12 h | Collective accomplishments without competitive ranking |
| Milestone Gallery | Needs audit | Awards and milestones | 8–18 h | 3–9 h | Curated exhibition, not a leaderboard |
| Historical archives | Needs audit | Events, awards, updates | 8–20 h | 3–10 h | Preserve context and browse older events |

### G. Safety, moderation, and administration

| System / work item | Initial status | Dependencies | Experienced-dev effort | Learning / discovery | Notes / acceptance evidence |
|---|---|---|---:|---:|---|
| Report content / member | Needs audit | Accounts, content systems | 12–26 h | 5–13 h | Clear reasons and review workflow |
| Moderation queue and actions | Needs audit | Roles, reports, audit log | 18–40 h | 8–20 h | Review, action, escalation, resolution |
| Administrative dashboard | Needs audit | Roles, core entities | 18–40 h | 8–20 h | Routine management without direct database edits |
| Audit trail | Needs audit | Administrative and moderation actions | 8–18 h | 3–9 h | Record sensitive actions and actor/time |
| Policy enforcement workflows | Decision needed | Policies, moderation tools | 6–16 h | 3–8 h | Operational procedures match published policy |
| Age gate / 18+ implementation | Needs audit | Registration, policy decisions | 6–16 h | 3–8 h | Determine appropriate age assurance; don't assume a checkbox settles compliance |
| Data export / account deletion | Needs audit | Accounts, privacy, data model | 12–28 h | 5–14 h | Retention, deletion, and legal exceptions documented |

### H. Publishing and project communication

| System / work item | Initial status | Dependencies | Experienced-dev effort | Learning / discovery | Notes / acceptance evidence |
|---|---|---|---:|---:|---|
| Public roadmap page | Implemented as static site — review | Public site | 2–6 h | 1–3 h | Keep public scope distinct from internal task tracking |
| Dated project updates page | Implemented as static journal — review | Public site | 2–6 h | 1–3 h | Date, category, summary, body, related roadmap link |
| Future admin publishing interface | Deferred | Accounts, roles, content model | 16–36 h | 7–18 h | Not required while static updates remain manageable |

## Cross-system dependencies

This is a planning guide, not a rigid waterfall:
1. **Foundation:** local setup, configuration, database conventions, tests, deployment approach.
2. **Identity and authorization:** accounts, profiles, permissions, privacy, account controls.
3. **Shared community primitives:** groups, memberships, posts, threads, notifications, moderation foundations.
4. **Projects:** project pages, taxonomies, external links, collaborators.
5. **Events and teams:** event records, participation, goals, team membership and visibility.
6. **Recognition:** awards, milestones, pennants, gallery and history.
7. **Operational hardening:** restore testing, monitoring, security and accessibility review, administrative workflows, beta feedback.

Moderation, privacy, accessibility, and testing must be designed alongside the systems they protect; do not postpone them until final hardening.

## Proposed first usable community

A first invite-only beta should be smaller than the complete vision. Candidate scope:
- Secure accounts, profiles, permissions, and account recovery.
- Core community spaces: groups and memberships.
- Projects as descriptive pages with external links (no work hosting).
- A basic discussion surface and short posts, if moderation is ready.
- Reporting, blocking/muting, and an administrator review workflow.
- Basic notifications with sensible preferences.
- Accessible responsive interface.
- Backups, monitoring, deployment documentation, and a tested recovery process.

Events, team pennants, elaborate recognition, advanced discovery, and optional supporter features can follow unless a small subset is essential to the beta experience. Beta readiness depends on safety and operational capability, not simply feature count.

## Infrastructure and operating-cost inventory

Do not commit to a hosting plan until the expected application shape and service requirements are understood. Compare current provider pricing when selecting services.

| Cost item | Need | Pricing basis | Decision / next step |
|---|---|---|---|
| Application hosting (DigitalOcean under consideration) | Run Laravel application | Monthly; resource tier | Compare Droplet vs managed options and operational burden |
| Database | Persistent application data | Monthly; capacity / managed tier | Compare managed database with self-managed option |
| Backups | Recovery from data loss | Monthly; retention and size | Require automated backups and restore testing |
| Domain and DNS | Public address and routing | Annual / provider-dependent | Confirm ownership and renewal |
| Transactional email | Verification, recovery, notifications | Monthly / volume | Compare providers and sender-domain setup |
| Object storage | Platform-owned assets, if needed | Usage-based | No member creative-work hosting; avoid unnecessary uploads |
| Monitoring and error reporting | Detect faults | Free tier / usage-based | Choose a simple, maintainable option |
| Security / accessibility review | Independent review before public opening | One-time or periodic | Scope to launch surface and risk |
| Design assets and fonts | Licensed visual materials | One-time / subscription | Keep license register and permitted-use notes |

## Ongoing maintenance allowance

Reserve recurring capacity for framework and dependency security updates; database and backup checks including restore tests; monitoring and incident response; bug fixes and regression testing; accessibility checks as features change; moderation and member support; documentation updates; and periodic review of hosting cost, capacity, and service dependencies.

Do not treat all available development time as feature-building time. Maintenance and community operations are permanent parts of the platform's workload.

## Decisions still needed

- Confirm the actual state of the Laravel codebase, migrations, tests, and existing documentation.
- Define the smallest safe invite-only beta scope.
- Choose initial hosting and database architecture after comparing cost and operational burden.
- Choose transactional email provider and sender-domain setup.
- Define administrator/moderator roles and workflows.
- Decide which profile fields are public, private, or optional.
- Define moderation policy and operational response expectations.
- Define the community policy for generative AI content and AI-assisted work before member content features open.
- Decide whether any member-uploaded images (such as avatars) are supported; if so, define limits, moderation, storage, and privacy implications.
- Decide how project updates will be published while the public site remains static.
- Establish realistic weekly/monthly development capacity, including rest and learning time.

## Next audit session checklist

When backend work resumes, inspect the repository and replace assumptions with evidence:
- [ ] Read composer.json, lockfile, PHP runtime, and Laravel version.
- [ ] Inventory routes, controllers, models, requests, policies, services, views, and frontend assets.
- [ ] Inventory migrations and current database schema.
- [ ] Inventory automated tests and identify missing critical coverage.
- [ ] Inspect authentication, username validation, and authorization implementation.
- [ ] Review environment configuration and secret handling.
- [ ] Check dependency security and update status.
- [ ] Identify unfinished or experimental code.
- [ ] Map existing code to the system inventory above.
- [ ] Revise effort estimates based on actual implementation and learning needs.

## Estimation worksheet

For each task, record:

| Field | Meaning |
|---|---|
| Task | Small, testable unit of work |
| Existing state | Verified code and test evidence |
| Remaining implementation | Estimated focused work |
| Learning / investigation | Time to understand unfamiliar concepts |
| QA / accessibility | Test and review time |
| Dependencies | Work that must precede it |
| Risk | Low / medium / high, with reason |
| Maintenance impact | New ongoing support burden |
| Owner | Person responsible |
| Status | Planned / ready / in progress / blocked / done |

**Planning rule:** estimates change when new information appears. A revised estimate is not a failure; it is how we keep the plan honest.
