# Azure Function Custom Handler
Custom handlers are lightweight web servers that receive events from the Azure Functions host. Any language that supports HTTP primitives can implement a custom handler.

This repository contains a simple example that demonstrates how to run PHP as a Custom Handler of an Azure Function.

For more details, refers to [Azure Functions Custom Handlers](https://docs.microsoft.com/en-us/azure/azure-functions/functions-custom-handlers).

## Getting started
- Create an Azure Function App.
  - Specify *Custom Handler* as *Runtime stack*.
  - Select *Windows* or *Linux* as operating system.
- Deploy the application.
- Open the browser and visit _https://\<YOUR-FUNCTION-NAME\>.azurewebsites.net/api/users_.

**Note:** the PHP runtime is already installed in the provided machine by Azure.