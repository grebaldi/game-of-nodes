# Game of nodes

> Short introduction to using Neo4j with PHP

## WARNING:

The `php-bcmath` and `php-mbstring` extensions are required in order to use `graphaware/neo4j-php-client`. In this particular setup this is covered by docker. Be aware, that if you try to run the examples locally, you're going to need to install the aforementioned extensions.

## Installation

Just run the `install` make target:

```
make install
```

This should spin up all containers, install the composer dependencies and populate die database with fixture data.

## Run the examples

Each example comes with a make target, so just run one of these:

```
make example-friend-or-foe
make example-family
make example-friends
make example-enemies
make example-welcome-in
```

## Further Resources

* Neo4j Website: https://neo4j.com
* Cypher Documentation: https://neo4j.com/docs/cypher-manual/current/
* GraphAware Neo4j PHP Client: https://github.com/graphaware/neo4j-php-client