Dataobject Metadata
======
**Dataobject Metadata** is a simple example for implementing the AEV (Attribute-Entity-Value) Model in Silverstripe using many many extra fields.

***Why?*** Some dataobjects are constantly changing, variable in nature (such as products) and need to be more flexible, hence won't always work with adding columns continually that won't be used anyway. This is where this module comes in.

This isn't really usable as is, and will require you to install one of the suggested modules so you can manage the extra fields correctly, or you can use the built-in GridFieldDetailForm to manage the attributes without another module.

Downside, only usable in collections, but this is what I mainly use it for anyway.

## Install
Add the following to your composer.json file

```

    "require"          : {
		"milkyway-multimedia/ss-dataobject-metadata": "dev-master"
	}

```

And add an extension to your DataObject in your YAML config:

```

    Product:
      extensions:
        - Milkyway\SS\Metadata\Extensions\Metadata('RelationName (optional - will use the name of owning object for relation otherwise - in this case Product)')

```

## License
* MIT

## Version
* Version 0.1 - Alpha

## Contact
#### Milkyway Multimedia
* Homepage: http://milkywaymultimedia.com.au
* E-mail: mell@milkywaymultimedia.com.au
* Twitter: [@mwmdesign](https://twitter.com/mwmdesign "mwmdesign on twitter")