# Route List Command for Statamic

## Installation

To install simply copy the `RouteList` directory into your site's `addons` directory and you are done!

## Usage

This add-on makes Laravel's `route:list` command available to you within the context of your Statamic site.

You can run the command by issuing the following command:

```bash
php please route:list
```

You should then see a list of all the registered routes for your Statamic site.

The `route:list` command provides many different options to customize the output. To learn more about these options issue the following command:

```bash
php please route:list -h
```

You should see output similar to the following:

```
Usage:
  route:list [options]

Options:
      --method[=METHOD]  Filter the routes by method.
      --name[=NAME]      Filter the routes by name.
      --path[=PATH]      Filter the routes by path.
  -r, --reverse          Reverse the ordering of the routes.
      --sort[=SORT]      The column (host, method, uri, name, action, middleware) to sort by. [default: "uri"]
  -h, --help             Display this help message
  -q, --quiet            Do not output any message
  -V, --version          Display this application version
      --ansi             Force ANSI output
      --no-ansi          Disable ANSI output
  -n, --no-interaction   Do not ask any interactive question
      --env[=ENV]        The environment the command should run under.
  -v|vv|vvv, --verbose   Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Help:
  List all registered routes
```

## License

Route List Command for Statamic is open-sourced software licensed under the MIT license.