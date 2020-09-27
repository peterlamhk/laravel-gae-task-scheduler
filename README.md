# Laravel Task Scheduling on Google App Engine
App Engine cron.yaml provides HTTP request scheduling feature. We can use the request to run artisan ``schedule:run`` command.

## Installation
1. Install this package via the Composer package manager:
```shell
composer require retepmal/laravel-gae-task-scheduler
```

2. The task scheduler endpoint can be customized (optional).
```
GOOGLE_CLOUD_TASK_SCHEDULER_URI=/task_scheduler
```

3. Create an ``cron.yaml`` file in project root as below:
```yaml
cron:
- description: "Task Scheduler"
  url: /task-scheduler
  schedule: every 1 mins
```

4. Deplay the cron setting by executing the command:
```shell
gcloud app delpoy cron.yaml
```
