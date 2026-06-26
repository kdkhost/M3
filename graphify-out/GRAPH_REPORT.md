# Graph Report - M3  (2026-06-26)

## Corpus Check
- 85 files · ~1,531,676 words
- Verdict: corpus is large enough that graph structure adds value.

## Summary
- 437 nodes · 574 edges · 96 communities (84 shown, 12 thin omitted)
- Extraction: 100% EXTRACTED · 0% INFERRED · 0% AMBIGUOUS · INFERRED: 2 edges (avg confidence: 0.8)
- Token cost: 0 input · 0 output

## Graph Freshness
- Built from commit: `8a7c2eca`
- Run `git rev-parse HEAD` and compare to check if the graph is stale.
- Run `graphify update .` after code changes (no API cost).

## Community Hubs (Navigation)
- [[_COMMUNITY_Community 0|Community 0]]
- [[_COMMUNITY_Community 1|Community 1]]
- [[_COMMUNITY_Community 2|Community 2]]
- [[_COMMUNITY_Community 3|Community 3]]
- [[_COMMUNITY_Community 4|Community 4]]
- [[_COMMUNITY_Community 7|Community 7]]
- [[_COMMUNITY_Community 8|Community 8]]
- [[_COMMUNITY_Community 9|Community 9]]
- [[_COMMUNITY_Community 10|Community 10]]
- [[_COMMUNITY_Community 11|Community 11]]
- [[_COMMUNITY_Community 12|Community 12]]
- [[_COMMUNITY_Community 14|Community 14]]
- [[_COMMUNITY_Community 15|Community 15]]
- [[_COMMUNITY_Community 18|Community 18]]
- [[_COMMUNITY_Community 20|Community 20]]
- [[_COMMUNITY_Community 21|Community 21]]
- [[_COMMUNITY_Community 22|Community 22]]
- [[_COMMUNITY_Community 23|Community 23]]
- [[_COMMUNITY_Community 28|Community 28]]

## God Nodes (most connected - your core abstractions)
1. `PHPMailer` - 125 edges
2. `SMTP` - 43 edges
3. `ClassLoader` - 26 edges
4. `PHPMailer – A full-featured email creation and transfer class for PHP` - 16 edges
5. `InstalledVersions` - 15 edges
6. `POP3` - 12 edges
7. `suggest` - 10 edges
8. `require-dev` - 9 edges
9. `DSNConfigurator` - 8 edges
10. `require` - 5 edges

## Surprising Connections (you probably didn't know these)
- None detected - all connections are within the same source files.

## Communities (96 total, 12 thin omitted)

### Community 2 - "Community 2"
Cohesion: 0.06
Nodes (35): dealerdirect/phpcodesniffer-composer-installer, authors, autoload, autoload-dev, psr-4, psr-4, config, allow-plugins (+27 more)

### Community 4 - "Community 4"
Cohesion: 0.08
Nodes (25): A Simple Example, Changelog, code:json ("phpmailer/phpmailer": "^6.10.0"), code:sh (composer require phpmailer/phpmailer), code:php (<?php), code:php (<?php), code:php (//To load the French version), code:sh (git remote set-url upstream https://github.com/PHPMailer/PHP) (+17 more)

### Community 7 - "Community 7"
Cohesion: 0.10
Nodes (19): background_color, categories, description, display, display_override, edge_side_panel, preferred_width, icons (+11 more)

### Community 10 - "Community 10"
Cohesion: 0.18
Nodes (4): ASSETS_TO_PRECACHE, CACHE_STRATEGIES, MAX_AGE, url

### Community 11 - "Community 11"
Cohesion: 0.20
Nodes (10): suggest, decomplexity/SendOauth2, ext-mbstring, ext-openssl, greew/oauth2-azure-provider, hayageek/oauth2-yahoo, league/oauth2-google, psr/log (+2 more)

### Community 14 - "Community 14"
Cohesion: 0.29
Nodes (6): A short history of UTF-8 in email, Background, code:block1 (Subject: =?utf-8?Q=Schr=C3=B6dinger=92s_Cat?=), Postfix gotcha, SMTPUTF8, SMTPUTF8 in PHPMailer

### Community 20 - "Community 20"
Cohesion: 0.50
Nodes (3): dev, dev-package-names, packages

## Knowledge Gaps
- **83 isolated node(s):** `phpmailer/phpmailer`, `name`, `short_name`, `description`, `start_url` (+78 more)
  These have ≤1 connection - possible missing edges or undocumented components.
- **12 thin communities (<3 nodes) omitted from report** — run `graphify query` to explore isolated nodes.

## Suggested Questions
_Questions this graph is uniquely positioned to answer:_

- **Why does `PHPMailer` connect `Community 0` to `Community 5`, `Community 6`, `Community 13`, `Community 16`, `Community 17`, `Community 19`, `Community 24`, `Community 25`, `Community 26`, `Community 27`?**
  _High betweenness centrality (0.127) - this node is a cross-community bridge._
- **Why does `SMTP` connect `Community 1` to `Community 6`?**
  _High betweenness centrality (0.052) - this node is a cross-community bridge._
- **Why does `ClassLoader` connect `Community 3` to `Community 8`?**
  _High betweenness centrality (0.007) - this node is a cross-community bridge._
- **What connects `phpmailer/phpmailer`, `name`, `short_name` to the rest of the system?**
  _83 weakly-connected nodes found - possible documentation gaps or missing edges._
- **Should `Community 0` be split into smaller, more focused modules?**
  _Cohesion score 0.043478260869565216 - nodes in this community are weakly interconnected._
- **Should `Community 1` be split into smaller, more focused modules?**
  _Cohesion score 0.09745293466223699 - nodes in this community are weakly interconnected._
- **Should `Community 2` be split into smaller, more focused modules?**
  _Cohesion score 0.05555555555555555 - nodes in this community are weakly interconnected._