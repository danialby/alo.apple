<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setRoutes(
    unserialize(base64_decode('TzozNDoiSWxsdW1pbmF0ZVxSb3V0aW5nXFJvdXRlQ29sbGVjdGlvbiI6NDp7czo5OiIAKgByb3V0ZXMiO2E6Mzp7czozOiJHRVQiO2E6MTE6e3M6ODoiYXBpL3VzZXIiO086MjQ6IklsbHVtaW5hdGVcUm91dGluZ1xSb3V0ZSI6MTI6e3M6MzoidXJpIjtzOjg6ImFwaS91c2VyIjtzOjc6Im1ldGhvZHMiO2E6Mjp7aTowO3M6MzoiR0VUIjtpOjE7czo0OiJIRUFEIjt9czo2OiJhY3Rpb24iO2E6Njp7czoxMDoibWlkZGxld2FyZSI7YToyOntpOjA7czozOiJhcGkiO2k6MTtzOjg6ImF1dGg6YXBpIjt9czo0OiJ1c2VzIjtzOjQ4OiJBcHBcSHR0cFxDb250cm9sbGVyc1xVc2VyQ29udHJvbGxlckBBdXRoUm91dGVBUEkiO3M6MTA6ImNvbnRyb2xsZXIiO3M6NDg6IkFwcFxIdHRwXENvbnRyb2xsZXJzXFVzZXJDb250cm9sbGVyQEF1dGhSb3V0ZUFQSSI7czo5OiJuYW1lc3BhY2UiO3M6MjA6IkFwcFxIdHRwXENvbnRyb2xsZXJzIjtzOjY6InByZWZpeCI7czozOiJhcGkiO3M6NToid2hlcmUiO2E6MDp7fX1zOjEwOiJpc0ZhbGxiYWNrIjtiOjA7czoxMDoiY29udHJvbGxlciI7TjtzOjg6ImRlZmF1bHRzIjthOjA6e31zOjY6IndoZXJlcyI7YTowOnt9czoxMDoicGFyYW1ldGVycyI7TjtzOjE0OiJwYXJhbWV0ZXJOYW1lcyI7TjtzOjIxOiIAKgBvcmlnaW5hbFBhcmFtZXRlcnMiO047czoxODoiY29tcHV0ZWRNaWRkbGV3YXJlIjtOO3M6ODoiY29tcGlsZWQiO0M6Mzk6IlN5bWZvbnlcQ29tcG9uZW50XFJvdXRpbmdcQ29tcGlsZWRSb3V0ZSI6MjU5OnthOjg6e3M6NDoidmFycyI7YTowOnt9czoxMToicGF0aF9wcmVmaXgiO3M6OToiL2FwaS91c2VyIjtzOjEwOiJwYXRoX3JlZ2V4IjtzOjE2OiIjXi9hcGkvdXNlciQjc0R1IjtzOjExOiJwYXRoX3Rva2VucyI7YToxOntpOjA7YToyOntpOjA7czo0OiJ0ZXh0IjtpOjE7czo5OiIvYXBpL3VzZXIiO319czo5OiJwYXRoX3ZhcnMiO2E6MDp7fXM6MTA6Imhvc3RfcmVnZXgiO047czoxMToiaG9zdF90b2tlbnMiO2E6MDp7fXM6OToiaG9zdF92YXJzIjthOjA6e319fX1zOjU6ImxvZ2luIjtPOjI0OiJJbGx1bWluYXRlXFJvdXRpbmdcUm91dGUiOjEyOntzOjM6InVyaSI7czo1OiJsb2dpbiI7czo3OiJtZXRob2RzIjthOjI6e2k6MDtzOjM6IkdFVCI7aToxO3M6NDoiSEVBRCI7fXM6NjoiYWN0aW9uIjthOjc6e3M6MTA6Im1pZGRsZXdhcmUiO2E6MTp7aTowO3M6Mzoid2ViIjt9czo0OiJ1c2VzIjtzOjU1OiJBcHBcSHR0cFxDb250cm9sbGVyc1xBdXRoXExvZ2luQ29udHJvbGxlckBzaG93TG9naW5Gb3JtIjtzOjEwOiJjb250cm9sbGVyIjtzOjU1OiJBcHBcSHR0cFxDb250cm9sbGVyc1xBdXRoXExvZ2luQ29udHJvbGxlckBzaG93TG9naW5Gb3JtIjtzOjk6Im5hbWVzcGFjZSI7czoyMDoiQXBwXEh0dHBcQ29udHJvbGxlcnMiO3M6NjoicHJlZml4IjtOO3M6NToid2hlcmUiO2E6MDp7fXM6MjoiYXMiO3M6NToibG9naW4iO31zOjEwOiJpc0ZhbGxiYWNrIjtiOjA7czoxMDoiY29udHJvbGxlciI7TjtzOjg6ImRlZmF1bHRzIjthOjA6e31zOjY6IndoZXJlcyI7YTowOnt9czoxMDoicGFyYW1ldGVycyI7TjtzOjE0OiJwYXJhbWV0ZXJOYW1lcyI7TjtzOjIxOiIAKgBvcmlnaW5hbFBhcmFtZXRlcnMiO047czoxODoiY29tcHV0ZWRNaWRkbGV3YXJlIjtOO3M6ODoiY29tcGlsZWQiO0M6Mzk6IlN5bWZvbnlcQ29tcG9uZW50XFJvdXRpbmdcQ29tcGlsZWRSb3V0ZSI6MjUwOnthOjg6e3M6NDoidmFycyI7YTowOnt9czoxMToicGF0aF9wcmVmaXgiO3M6NjoiL2xvZ2luIjtzOjEwOiJwYXRoX3JlZ2V4IjtzOjEzOiIjXi9sb2dpbiQjc0R1IjtzOjExOiJwYXRoX3Rva2VucyI7YToxOntpOjA7YToyOntpOjA7czo0OiJ0ZXh0IjtpOjE7czo2OiIvbG9naW4iO319czo5OiJwYXRoX3ZhcnMiO2E6MDp7fXM6MTA6Imhvc3RfcmVnZXgiO047czoxMToiaG9zdF90b2tlbnMiO2E6MDp7fXM6OToiaG9zdF92YXJzIjthOjA6e319fX1zOjg6InJlZ2lzdGVyIjtPOjI0OiJJbGx1bWluYXRlXFJvdXRpbmdcUm91dGUiOjEyOntzOjM6InVyaSI7czo4OiJyZWdpc3RlciI7czo3OiJtZXRob2RzIjthOjI6e2k6MDtzOjM6IkdFVCI7aToxO3M6NDoiSEVBRCI7fXM6NjoiYWN0aW9uIjthOjc6e3M6MTA6Im1pZGRsZXdhcmUiO2E6MTp7aTowO3M6Mzoid2ViIjt9czo0OiJ1c2VzIjtzOjY1OiJBcHBcSHR0cFxDb250cm9sbGVyc1xBdXRoXFJlZ2lzdGVyQ29udHJvbGxlckBzaG93UmVnaXN0cmF0aW9uRm9ybSI7czoxMDoiY29udHJvbGxlciI7czo2NToiQXBwXEh0dHBcQ29udHJvbGxlcnNcQXV0aFxSZWdpc3RlckNvbnRyb2xsZXJAc2hvd1JlZ2lzdHJhdGlvbkZvcm0iO3M6OToibmFtZXNwYWNlIjtzOjIwOiJBcHBcSHR0cFxDb250cm9sbGVycyI7czo2OiJwcmVmaXgiO047czo1OiJ3aGVyZSI7YTowOnt9czoyOiJhcyI7czo4OiJyZWdpc3RlciI7fXM6MTA6ImlzRmFsbGJhY2siO2I6MDtzOjEwOiJjb250cm9sbGVyIjtOO3M6ODoiZGVmYXVsdHMiO2E6MDp7fXM6Njoid2hlcmVzIjthOjA6e31zOjEwOiJwYXJhbWV0ZXJzIjtOO3M6MTQ6InBhcmFtZXRlck5hbWVzIjtOO3M6MjE6IgAqAG9yaWdpbmFsUGFyYW1ldGVycyI7TjtzOjE4OiJjb21wdXRlZE1pZGRsZXdhcmUiO047czo4OiJjb21waWxlZCI7QzozOToiU3ltZm9ueVxDb21wb25lbnRcUm91dGluZ1xDb21waWxlZFJvdXRlIjoyNTk6e2E6ODp7czo0OiJ2YXJzIjthOjA6e31zOjExOiJwYXRoX3ByZWZpeCI7czo5OiIvcmVnaXN0ZXIiO3M6MTA6InBhdGhfcmVnZXgiO3M6MTY6IiNeL3JlZ2lzdGVyJCNzRHUiO3M6MTE6InBhdGhfdG9rZW5zIjthOjE6e2k6MDthOjI6e2k6MDtzOjQ6InRleHQiO2k6MTtzOjk6Ii9yZWdpc3RlciI7fX1zOjk6InBhdGhfdmFycyI7YTowOnt9czoxMDoiaG9zdF9yZWdleCI7TjtzOjExOiJob3N0X3Rva2VucyI7YTowOnt9czo5OiJob3N0X3ZhcnMiO2E6MDp7fX19fXM6MTQ6InBhc3N3b3JkL3Jlc2V0IjtPOjI0OiJJbGx1bWluYXRlXFJvdXRpbmdcUm91dGUiOjEyOntzOjM6InVyaSI7czoxNDoicGFzc3dvcmQvcmVzZXQiO3M6NzoibWV0aG9kcyI7YToyOntpOjA7czozOiJHRVQiO2k6MTtzOjQ6IkhFQUQiO31zOjY6ImFjdGlvbiI7YTo3OntzOjEwOiJtaWRkbGV3YXJlIjthOjE6e2k6MDtzOjM6IndlYiI7fXM6NDoidXNlcyI7czo3MDoiQXBwXEh0dHBcQ29udHJvbGxlcnNcQXV0aFxGb3Jnb3RQYXNzd29yZENvbnRyb2xsZXJAc2hvd0xpbmtSZXF1ZXN0Rm9ybSI7czoxMDoiY29udHJvbGxlciI7czo3MDoiQXBwXEh0dHBcQ29udHJvbGxlcnNcQXV0aFxGb3Jnb3RQYXNzd29yZENvbnRyb2xsZXJAc2hvd0xpbmtSZXF1ZXN0Rm9ybSI7czo5OiJuYW1lc3BhY2UiO3M6MjA6IkFwcFxIdHRwXENvbnRyb2xsZXJzIjtzOjY6InByZWZpeCI7TjtzOjU6IndoZXJlIjthOjA6e31zOjI6ImFzIjtzOjE2OiJwYXNzd29yZC5yZXF1ZXN0Ijt9czoxMDoiaXNGYWxsYmFjayI7YjowO3M6MTA6ImNvbnRyb2xsZXIiO047czo4OiJkZWZhdWx0cyI7YTowOnt9czo2OiJ3aGVyZXMiO2E6MDp7fXM6MTA6InBhcmFtZXRlcnMiO047czoxNDoicGFyYW1ldGVyTmFtZXMiO047czoyMToiACoAb3JpZ2luYWxQYXJhbWV0ZXJzIjtOO3M6MTg6ImNvbXB1dGVkTWlkZGxld2FyZSI7TjtzOjg6ImNvbXBpbGVkIjtDOjM5OiJTeW1mb255XENvbXBvbmVudFxSb3V0aW5nXENvbXBpbGVkUm91dGUiOjI3OTp7YTo4OntzOjQ6InZhcnMiO2E6MDp7fXM6MTE6InBhdGhfcHJlZml4IjtzOjE1OiIvcGFzc3dvcmQvcmVzZXQiO3M6MTA6InBhdGhfcmVnZXgiO3M6MjI6IiNeL3Bhc3N3b3JkL3Jlc2V0JCNzRHUiO3M6MTE6InBhdGhfdG9rZW5zIjthOjE6e2k6MDthOjI6e2k6MDtzOjQ6InRleHQiO2k6MTtzOjE1OiIvcGFzc3dvcmQvcmVzZXQiO319czo5OiJwYXRoX3ZhcnMiO2E6MDp7fXM6MTA6Imhvc3RfcmVnZXgiO047czoxMToiaG9zdF90b2tlbnMiO2E6MDp7fXM6OToiaG9zdF92YXJzIjthOjA6e319fX1zOjIyOiJwYXNzd29yZC9yZXNldC97dG9rZW59IjtPOjI0OiJJbGx1bWluYXRlXFJvdXRpbmdcUm91dGUiOjEyOntzOjM6InVyaSI7czoyMjoicGFzc3dvcmQvcmVzZXQve3Rva2VufSI7czo3OiJtZXRob2RzIjthOjI6e2k6MDtzOjM6IkdFVCI7aToxO3M6NDoiSEVBRCI7fXM6NjoiYWN0aW9uIjthOjc6e3M6MTA6Im1pZGRsZXdhcmUiO2E6MTp7aTowO3M6Mzoid2ViIjt9czo0OiJ1c2VzIjtzOjYzOiJBcHBcSHR0cFxDb250cm9sbGVyc1xBdXRoXFJlc2V0UGFzc3dvcmRDb250cm9sbGVyQHNob3dSZXNldEZvcm0iO3M6MTA6ImNvbnRyb2xsZXIiO3M6NjM6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEF1dGhcUmVzZXRQYXNzd29yZENvbnRyb2xsZXJAc2hvd1Jlc2V0Rm9ybSI7czo5OiJuYW1lc3BhY2UiO3M6MjA6IkFwcFxIdHRwXENvbnRyb2xsZXJzIjtzOjY6InByZWZpeCI7TjtzOjU6IndoZXJlIjthOjA6e31zOjI6ImFzIjtzOjE0OiJwYXNzd29yZC5yZXNldCI7fXM6MTA6ImlzRmFsbGJhY2siO2I6MDtzOjEwOiJjb250cm9sbGVyIjtOO3M6ODoiZGVmYXVsdHMiO2E6MDp7fXM6Njoid2hlcmVzIjthOjA6e31zOjEwOiJwYXJhbWV0ZXJzIjtOO3M6MTQ6InBhcmFtZXRlck5hbWVzIjtOO3M6MjE6IgAqAG9yaWdpbmFsUGFyYW1ldGVycyI7TjtzOjE4OiJjb21wdXRlZE1pZGRsZXdhcmUiO047czo4OiJjb21waWxlZCI7QzozOToiU3ltZm9ueVxDb21wb25lbnRcUm91dGluZ1xDb21waWxlZFJvdXRlIjo0MTE6e2E6ODp7czo0OiJ2YXJzIjthOjE6e2k6MDtzOjU6InRva2VuIjt9czoxMToicGF0aF9wcmVmaXgiO3M6MTU6Ii9wYXNzd29yZC9yZXNldCI7czoxMDoicGF0aF9yZWdleCI7czo0MDoiI14vcGFzc3dvcmQvcmVzZXQvKD9QPHRva2VuPlteL10rKykkI3NEdSI7czoxMToicGF0aF90b2tlbnMiO2E6Mjp7aTowO2E6NTp7aTowO3M6ODoidmFyaWFibGUiO2k6MTtzOjE6Ii8iO2k6MjtzOjY6IlteL10rKyI7aTozO3M6NToidG9rZW4iO2k6NDtiOjE7fWk6MTthOjI6e2k6MDtzOjQ6InRleHQiO2k6MTtzOjE1OiIvcGFzc3dvcmQvcmVzZXQiO319czo5OiJwYXRoX3ZhcnMiO2E6MTp7aTowO3M6NToidG9rZW4iO31zOjEwOiJob3N0X3JlZ2V4IjtOO3M6MTE6Imhvc3RfdG9rZW5zIjthOjA6e31zOjk6Imhvc3RfdmFycyI7YTowOnt9fX19czoxNjoicGFzc3dvcmQvY29uZmlybSI7TzoyNDoiSWxsdW1pbmF0ZVxSb3V0aW5nXFJvdXRlIjoxMjp7czozOiJ1cmkiO3M6MTY6InBhc3N3b3JkL2NvbmZpcm0iO3M6NzoibWV0aG9kcyI7YToyOntpOjA7czozOiJHRVQiO2k6MTtzOjQ6IkhFQUQiO31zOjY6ImFjdGlvbiI7YTo3OntzOjEwOiJtaWRkbGV3YXJlIjthOjE6e2k6MDtzOjM6IndlYiI7fXM6NDoidXNlcyI7czo2NzoiQXBwXEh0dHBcQ29udHJvbGxlcnNcQXV0aFxDb25maXJtUGFzc3dvcmRDb250cm9sbGVyQHNob3dDb25maXJtRm9ybSI7czoxMDoiY29udHJvbGxlciI7czo2NzoiQXBwXEh0dHBcQ29udHJvbGxlcnNcQXV0aFxDb25maXJtUGFzc3dvcmRDb250cm9sbGVyQHNob3dDb25maXJtRm9ybSI7czo5OiJuYW1lc3BhY2UiO3M6MjA6IkFwcFxIdHRwXENvbnRyb2xsZXJzIjtzOjY6InByZWZpeCI7TjtzOjU6IndoZXJlIjthOjA6e31zOjI6ImFzIjtzOjE2OiJwYXNzd29yZC5jb25maXJtIjt9czoxMDoiaXNGYWxsYmFjayI7YjowO3M6MTA6ImNvbnRyb2xsZXIiO047czo4OiJkZWZhdWx0cyI7YTowOnt9czo2OiJ3aGVyZXMiO2E6MDp7fXM6MTA6InBhcmFtZXRlcnMiO047czoxNDoicGFyYW1ldGVyTmFtZXMiO047czoyMToiACoAb3JpZ2luYWxQYXJhbWV0ZXJzIjtOO3M6MTg6ImNvbXB1dGVkTWlkZGxld2FyZSI7TjtzOjg6ImNvbXBpbGVkIjtDOjM5OiJTeW1mb255XENvbXBvbmVudFxSb3V0aW5nXENvbXBpbGVkUm91dGUiOjI4NTp7YTo4OntzOjQ6InZhcnMiO2E6MDp7fXM6MTE6InBhdGhfcHJlZml4IjtzOjE3OiIvcGFzc3dvcmQvY29uZmlybSI7czoxMDoicGF0aF9yZWdleCI7czoyNDoiI14vcGFzc3dvcmQvY29uZmlybSQjc0R1IjtzOjExOiJwYXRoX3Rva2VucyI7YToxOntpOjA7YToyOntpOjA7czo0OiJ0ZXh0IjtpOjE7czoxNzoiL3Bhc3N3b3JkL2NvbmZpcm0iO319czo5OiJwYXRoX3ZhcnMiO2E6MDp7fXM6MTA6Imhvc3RfcmVnZXgiO047czoxMToiaG9zdF90b2tlbnMiO2E6MDp7fXM6OToiaG9zdF92YXJzIjthOjA6e319fX1zOjE6Ii8iO086MjQ6IklsbHVtaW5hdGVcUm91dGluZ1xSb3V0ZSI6MTI6e3M6MzoidXJpIjtzOjE6Ii8iO3M6NzoibWV0aG9kcyI7YToyOntpOjA7czozOiJHRVQiO2k6MTtzOjQ6IkhFQUQiO31zOjY6ImFjdGlvbiI7YTo3OntzOjEwOiJtaWRkbGV3YXJlIjthOjE6e2k6MDtzOjM6IndlYiI7fXM6NDoidXNlcyI7czo0MDoiQXBwXEh0dHBcQ29udHJvbGxlcnNcQWxvQ29udHJvbGxlckBpbmRleCI7czoxMDoiY29udHJvbGxlciI7czo0MDoiQXBwXEh0dHBcQ29udHJvbGxlcnNcQWxvQ29udHJvbGxlckBpbmRleCI7czo5OiJuYW1lc3BhY2UiO3M6MjA6IkFwcFxIdHRwXENvbnRyb2xsZXJzIjtzOjY6InByZWZpeCI7TjtzOjU6IndoZXJlIjthOjA6e31zOjI6ImFzIjtzOjQ6ImhvbWUiO31zOjEwOiJpc0ZhbGxiYWNrIjtiOjA7czoxMDoiY29udHJvbGxlciI7TjtzOjg6ImRlZmF1bHRzIjthOjA6e31zOjY6IndoZXJlcyI7YTowOnt9czoxMDoicGFyYW1ldGVycyI7TjtzOjE0OiJwYXJhbWV0ZXJOYW1lcyI7TjtzOjIxOiIAKgBvcmlnaW5hbFBhcmFtZXRlcnMiO047czoxODoiY29tcHV0ZWRNaWRkbGV3YXJlIjtOO3M6ODoiY29tcGlsZWQiO0M6Mzk6IlN5bWZvbnlcQ29tcG9uZW50XFJvdXRpbmdcQ29tcGlsZWRSb3V0ZSI6MjM0OnthOjg6e3M6NDoidmFycyI7YTowOnt9czoxMToicGF0aF9wcmVmaXgiO3M6MToiLyI7czoxMDoicGF0aF9yZWdleCI7czo4OiIjXi8kI3NEdSI7czoxMToicGF0aF90b2tlbnMiO2E6MTp7aTowO2E6Mjp7aTowO3M6NDoidGV4dCI7aToxO3M6MToiLyI7fX1zOjk6InBhdGhfdmFycyI7YTowOnt9czoxMDoiaG9zdF9yZWdleCI7TjtzOjExOiJob3N0X3Rva2VucyI7YTowOnt9czo5OiJob3N0X3ZhcnMiO2E6MDp7fX19fXM6NzoiQWJvdXRVcyI7TzoyNDoiSWxsdW1pbmF0ZVxSb3V0aW5nXFJvdXRlIjoxMjp7czozOiJ1cmkiO3M6NzoiQWJvdXRVcyI7czo3OiJtZXRob2RzIjthOjI6e2k6MDtzOjM6IkdFVCI7aToxO3M6NDoiSEVBRCI7fXM6NjoiYWN0aW9uIjthOjc6e3M6MTA6Im1pZGRsZXdhcmUiO2E6MTp7aTowO3M6Mzoid2ViIjt9czo0OiJ1c2VzIjtzOjQwOiJBcHBcSHR0cFxDb250cm9sbGVyc1xBbG9Db250cm9sbGVyQGFib3V0IjtzOjEwOiJjb250cm9sbGVyIjtzOjQwOiJBcHBcSHR0cFxDb250cm9sbGVyc1xBbG9Db250cm9sbGVyQGFib3V0IjtzOjk6Im5hbWVzcGFjZSI7czoyMDoiQXBwXEh0dHBcQ29udHJvbGxlcnMiO3M6NjoicHJlZml4IjtOO3M6NToid2hlcmUiO2E6MDp7fXM6MjoiYXMiO3M6NToiYWJvdXQiO31zOjEwOiJpc0ZhbGxiYWNrIjtiOjA7czoxMDoiY29udHJvbGxlciI7TjtzOjg6ImRlZmF1bHRzIjthOjA6e31zOjY6IndoZXJlcyI7YTowOnt9czoxMDoicGFyYW1ldGVycyI7TjtzOjE0OiJwYXJhbWV0ZXJOYW1lcyI7TjtzOjIxOiIAKgBvcmlnaW5hbFBhcmFtZXRlcnMiO047czoxODoiY29tcHV0ZWRNaWRkbGV3YXJlIjtOO3M6ODoiY29tcGlsZWQiO0M6Mzk6IlN5bWZvbnlcQ29tcG9uZW50XFJvdXRpbmdcQ29tcGlsZWRSb3V0ZSI6MjU2OnthOjg6e3M6NDoidmFycyI7YTowOnt9czoxMToicGF0aF9wcmVmaXgiO3M6ODoiL0Fib3V0VXMiO3M6MTA6InBhdGhfcmVnZXgiO3M6MTU6IiNeL0Fib3V0VXMkI3NEdSI7czoxMToicGF0aF90b2tlbnMiO2E6MTp7aTowO2E6Mjp7aTowO3M6NDoidGV4dCI7aToxO3M6ODoiL0Fib3V0VXMiO319czo5OiJwYXRoX3ZhcnMiO2E6MDp7fXM6MTA6Imhvc3RfcmVnZXgiO047czoxMToiaG9zdF90b2tlbnMiO2E6MDp7fXM6OToiaG9zdF92YXJzIjthOjA6e319fX1zOjExOiJTdGF0dXNDaGVjayI7TzoyNDoiSWxsdW1pbmF0ZVxSb3V0aW5nXFJvdXRlIjoxMjp7czozOiJ1cmkiO3M6MTE6IlN0YXR1c0NoZWNrIjtzOjc6Im1ldGhvZHMiO2E6Mjp7aTowO3M6MzoiR0VUIjtpOjE7czo0OiJIRUFEIjt9czo2OiJhY3Rpb24iO2E6Njp7czoxMDoibWlkZGxld2FyZSI7YToxOntpOjA7czozOiJ3ZWIiO31zOjQ6InVzZXMiO3M6NDQ6IkFwcFxIdHRwXENvbnRyb2xsZXJzXFN0YXR1c0NvbnRyb2xsZXJAU3RhdHVzIjtzOjEwOiJjb250cm9sbGVyIjtzOjQ0OiJBcHBcSHR0cFxDb250cm9sbGVyc1xTdGF0dXNDb250cm9sbGVyQFN0YXR1cyI7czo5OiJuYW1lc3BhY2UiO3M6MjA6IkFwcFxIdHRwXENvbnRyb2xsZXJzIjtzOjY6InByZWZpeCI7TjtzOjU6IndoZXJlIjthOjA6e319czoxMDoiaXNGYWxsYmFjayI7YjowO3M6MTA6ImNvbnRyb2xsZXIiO047czo4OiJkZWZhdWx0cyI7YTowOnt9czo2OiJ3aGVyZXMiO2E6MDp7fXM6MTA6InBhcmFtZXRlcnMiO047czoxNDoicGFyYW1ldGVyTmFtZXMiO047czoyMToiACoAb3JpZ2luYWxQYXJhbWV0ZXJzIjtOO3M6MTg6ImNvbXB1dGVkTWlkZGxld2FyZSI7TjtzOjg6ImNvbXBpbGVkIjtDOjM5OiJTeW1mb255XENvbXBvbmVudFxSb3V0aW5nXENvbXBpbGVkUm91dGUiOjI3MDp7YTo4OntzOjQ6InZhcnMiO2E6MDp7fXM6MTE6InBhdGhfcHJlZml4IjtzOjEyOiIvU3RhdHVzQ2hlY2siO3M6MTA6InBhdGhfcmVnZXgiO3M6MTk6IiNeL1N0YXR1c0NoZWNrJCNzRHUiO3M6MTE6InBhdGhfdG9rZW5zIjthOjE6e2k6MDthOjI6e2k6MDtzOjQ6InRleHQiO2k6MTtzOjEyOiIvU3RhdHVzQ2hlY2siO319czo5OiJwYXRoX3ZhcnMiO2E6MDp7fXM6MTA6Imhvc3RfcmVnZXgiO047czoxMToiaG9zdF90b2tlbnMiO2E6MDp7fXM6OToiaG9zdF92YXJzIjthOjA6e319fX1zOjIyOiJTdGF0dXNGZXRjaC97aWR9L3ttb2J9IjtPOjI0OiJJbGx1bWluYXRlXFJvdXRpbmdcUm91dGUiOjEyOntzOjM6InVyaSI7czoyMjoiU3RhdHVzRmV0Y2gve2lkfS97bW9ifSI7czo3OiJtZXRob2RzIjthOjI6e2k6MDtzOjM6IkdFVCI7aToxO3M6NDoiSEVBRCI7fXM6NjoiYWN0aW9uIjthOjY6e3M6MTA6Im1pZGRsZXdhcmUiO2E6MTp7aTowO3M6Mzoid2ViIjt9czo0OiJ1c2VzIjtzOjQ3OiJBcHBcSHR0cFxDb250cm9sbGVyc1xTdGF0dXNDb250cm9sbGVyQHN0YXRmZXRjaCI7czoxMDoiY29udHJvbGxlciI7czo0NzoiQXBwXEh0dHBcQ29udHJvbGxlcnNcU3RhdHVzQ29udHJvbGxlckBzdGF0ZmV0Y2giO3M6OToibmFtZXNwYWNlIjtzOjIwOiJBcHBcSHR0cFxDb250cm9sbGVycyI7czo2OiJwcmVmaXgiO047czo1OiJ3aGVyZSI7YTowOnt9fXM6MTA6ImlzRmFsbGJhY2siO2I6MDtzOjEwOiJjb250cm9sbGVyIjtOO3M6ODoiZGVmYXVsdHMiO2E6MDp7fXM6Njoid2hlcmVzIjthOjA6e31zOjEwOiJwYXJhbWV0ZXJzIjtOO3M6MTQ6InBhcmFtZXRlck5hbWVzIjtOO3M6MjE6IgAqAG9yaWdpbmFsUGFyYW1ldGVycyI7TjtzOjE4OiJjb21wdXRlZE1pZGRsZXdhcmUiO047czo4OiJjb21waWxlZCI7QzozOToiU3ltZm9ueVxDb21wb25lbnRcUm91dGluZ1xDb21waWxlZFJvdXRlIjo1MTQ6e2E6ODp7czo0OiJ2YXJzIjthOjI6e2k6MDtzOjI6ImlkIjtpOjE7czozOiJtb2IiO31zOjExOiJwYXRoX3ByZWZpeCI7czoxMjoiL1N0YXR1c0ZldGNoIjtzOjEwOiJwYXRoX3JlZ2V4IjtzOjUwOiIjXi9TdGF0dXNGZXRjaC8oP1A8aWQ+W14vXSsrKS8oP1A8bW9iPlteL10rKykkI3NEdSI7czoxMToicGF0aF90b2tlbnMiO2E6Mzp7aTowO2E6NTp7aTowO3M6ODoidmFyaWFibGUiO2k6MTtzOjE6Ii8iO2k6MjtzOjY6IlteL10rKyI7aTozO3M6MzoibW9iIjtpOjQ7YjoxO31pOjE7YTo1OntpOjA7czo4OiJ2YXJpYWJsZSI7aToxO3M6MToiLyI7aToyO3M6NjoiW14vXSsrIjtpOjM7czoyOiJpZCI7aTo0O2I6MTt9aToyO2E6Mjp7aTowO3M6NDoidGV4dCI7aToxO3M6MTI6Ii9TdGF0dXNGZXRjaCI7fX1zOjk6InBhdGhfdmFycyI7YToyOntpOjA7czoyOiJpZCI7aToxO3M6MzoibW9iIjt9czoxMDoiaG9zdF9yZWdleCI7TjtzOjExOiJob3N0X3Rva2VucyI7YTowOnt9czo5OiJob3N0X3ZhcnMiO2E6MDp7fX19fXM6MTk6IlNlbmRDb2RlL3tpZH0ve21vYn0iO086MjQ6IklsbHVtaW5hdGVcUm91dGluZ1xSb3V0ZSI6MTI6e3M6MzoidXJpIjtzOjE5OiJTZW5kQ29kZS97aWR9L3ttb2J9IjtzOjc6Im1ldGhvZHMiO2E6Mjp7aTowO3M6MzoiR0VUIjtpOjE7czo0OiJIRUFEIjt9czo2OiJhY3Rpb24iO2E6Njp7czoxMDoibWlkZGxld2FyZSI7YToxOntpOjA7czozOiJ3ZWIiO31zOjQ6InVzZXMiO3M6NDM6IkFwcFxIdHRwXENvbnRyb2xsZXJzXFNtc0NvbnRyb2xsZXJAc2VuZGNvZGUiO3M6MTA6ImNvbnRyb2xsZXIiO3M6NDM6IkFwcFxIdHRwXENvbnRyb2xsZXJzXFNtc0NvbnRyb2xsZXJAc2VuZGNvZGUiO3M6OToibmFtZXNwYWNlIjtzOjIwOiJBcHBcSHR0cFxDb250cm9sbGVycyI7czo2OiJwcmVmaXgiO047czo1OiJ3aGVyZSI7YTowOnt9fXM6MTA6ImlzRmFsbGJhY2siO2I6MDtzOjEwOiJjb250cm9sbGVyIjtOO3M6ODoiZGVmYXVsdHMiO2E6MDp7fXM6Njoid2hlcmVzIjthOjA6e31zOjEwOiJwYXJhbWV0ZXJzIjtOO3M6MTQ6InBhcmFtZXRlck5hbWVzIjtOO3M6MjE6IgAqAG9yaWdpbmFsUGFyYW1ldGVycyI7TjtzOjE4OiJjb21wdXRlZE1pZGRsZXdhcmUiO047czo4OiJjb21waWxlZCI7QzozOToiU3ltZm9ueVxDb21wb25lbnRcUm91dGluZ1xDb21waWxlZFJvdXRlIjo1MDM6e2E6ODp7czo0OiJ2YXJzIjthOjI6e2k6MDtzOjI6ImlkIjtpOjE7czozOiJtb2IiO31zOjExOiJwYXRoX3ByZWZpeCI7czo5OiIvU2VuZENvZGUiO3M6MTA6InBhdGhfcmVnZXgiO3M6NDc6IiNeL1NlbmRDb2RlLyg/UDxpZD5bXi9dKyspLyg/UDxtb2I+W14vXSsrKSQjc0R1IjtzOjExOiJwYXRoX3Rva2VucyI7YTozOntpOjA7YTo1OntpOjA7czo4OiJ2YXJpYWJsZSI7aToxO3M6MToiLyI7aToyO3M6NjoiW14vXSsrIjtpOjM7czozOiJtb2IiO2k6NDtiOjE7fWk6MTthOjU6e2k6MDtzOjg6InZhcmlhYmxlIjtpOjE7czoxOiIvIjtpOjI7czo2OiJbXi9dKysiO2k6MztzOjI6ImlkIjtpOjQ7YjoxO31pOjI7YToyOntpOjA7czo0OiJ0ZXh0IjtpOjE7czo5OiIvU2VuZENvZGUiO319czo5OiJwYXRoX3ZhcnMiO2E6Mjp7aTowO3M6MjoiaWQiO2k6MTtzOjM6Im1vYiI7fXM6MTA6Imhvc3RfcmVnZXgiO047czoxMToiaG9zdF90b2tlbnMiO2E6MDp7fXM6OToiaG9zdF92YXJzIjthOjA6e319fX19czo0OiJIRUFEIjthOjExOntzOjg6ImFwaS91c2VyIjtyOjQ7czo1OiJsb2dpbiI7cjozOTtzOjg6InJlZ2lzdGVyIjtyOjc0O3M6MTQ6InBhc3N3b3JkL3Jlc2V0IjtyOjEwOTtzOjIyOiJwYXNzd29yZC9yZXNldC97dG9rZW59IjtyOjE0NDtzOjE2OiJwYXNzd29yZC9jb25maXJtIjtyOjE4NztzOjE6Ii8iO3I6MjIyO3M6NzoiQWJvdXRVcyI7cjoyNTc7czoxMToiU3RhdHVzQ2hlY2siO3I6MjkyO3M6MjI6IlN0YXR1c0ZldGNoL3tpZH0ve21vYn0iO3I6MzI2O3M6MTk6IlNlbmRDb2RlL3tpZH0ve21vYn0iO3I6Mzc2O31zOjQ6IlBPU1QiO2E6Nzp7czo1OiJsb2dpbiI7TzoyNDoiSWxsdW1pbmF0ZVxSb3V0aW5nXFJvdXRlIjoxMjp7czozOiJ1cmkiO3M6NToibG9naW4iO3M6NzoibWV0aG9kcyI7YToxOntpOjA7czo0OiJQT1NUIjt9czo2OiJhY3Rpb24iO2E6Njp7czoxMDoibWlkZGxld2FyZSI7YToxOntpOjA7czozOiJ3ZWIiO31zOjQ6InVzZXMiO3M6NDc6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEF1dGhcTG9naW5Db250cm9sbGVyQGxvZ2luIjtzOjEwOiJjb250cm9sbGVyIjtzOjQ3OiJBcHBcSHR0cFxDb250cm9sbGVyc1xBdXRoXExvZ2luQ29udHJvbGxlckBsb2dpbiI7czo5OiJuYW1lc3BhY2UiO3M6MjA6IkFwcFxIdHRwXENvbnRyb2xsZXJzIjtzOjY6InByZWZpeCI7TjtzOjU6IndoZXJlIjthOjA6e319czoxMDoiaXNGYWxsYmFjayI7YjowO3M6MTA6ImNvbnRyb2xsZXIiO047czo4OiJkZWZhdWx0cyI7YTowOnt9czo2OiJ3aGVyZXMiO2E6MDp7fXM6MTA6InBhcmFtZXRlcnMiO047czoxNDoicGFyYW1ldGVyTmFtZXMiO047czoyMToiACoAb3JpZ2luYWxQYXJhbWV0ZXJzIjtOO3M6MTg6ImNvbXB1dGVkTWlkZGxld2FyZSI7TjtzOjg6ImNvbXBpbGVkIjtDOjM5OiJTeW1mb255XENvbXBvbmVudFxSb3V0aW5nXENvbXBpbGVkUm91dGUiOjI1MDp7YTo4OntzOjQ6InZhcnMiO2E6MDp7fXM6MTE6InBhdGhfcHJlZml4IjtzOjY6Ii9sb2dpbiI7czoxMDoicGF0aF9yZWdleCI7czoxMzoiI14vbG9naW4kI3NEdSI7czoxMToicGF0aF90b2tlbnMiO2E6MTp7aTowO2E6Mjp7aTowO3M6NDoidGV4dCI7aToxO3M6NjoiL2xvZ2luIjt9fXM6OToicGF0aF92YXJzIjthOjA6e31zOjEwOiJob3N0X3JlZ2V4IjtOO3M6MTE6Imhvc3RfdG9rZW5zIjthOjA6e31zOjk6Imhvc3RfdmFycyI7YTowOnt9fX19czo2OiJsb2dvdXQiO086MjQ6IklsbHVtaW5hdGVcUm91dGluZ1xSb3V0ZSI6MTI6e3M6MzoidXJpIjtzOjY6ImxvZ291dCI7czo3OiJtZXRob2RzIjthOjE6e2k6MDtzOjQ6IlBPU1QiO31zOjY6ImFjdGlvbiI7YTo3OntzOjEwOiJtaWRkbGV3YXJlIjthOjE6e2k6MDtzOjM6IndlYiI7fXM6NDoidXNlcyI7czo0ODoiQXBwXEh0dHBcQ29udHJvbGxlcnNcQXV0aFxMb2dpbkNvbnRyb2xsZXJAbG9nb3V0IjtzOjEwOiJjb250cm9sbGVyIjtzOjQ4OiJBcHBcSHR0cFxDb250cm9sbGVyc1xBdXRoXExvZ2luQ29udHJvbGxlckBsb2dvdXQiO3M6OToibmFtZXNwYWNlIjtzOjIwOiJBcHBcSHR0cFxDb250cm9sbGVycyI7czo2OiJwcmVmaXgiO047czo1OiJ3aGVyZSI7YTowOnt9czoyOiJhcyI7czo2OiJsb2dvdXQiO31zOjEwOiJpc0ZhbGxiYWNrIjtiOjA7czoxMDoiY29udHJvbGxlciI7TjtzOjg6ImRlZmF1bHRzIjthOjA6e31zOjY6IndoZXJlcyI7YTowOnt9czoxMDoicGFyYW1ldGVycyI7TjtzOjE0OiJwYXJhbWV0ZXJOYW1lcyI7TjtzOjIxOiIAKgBvcmlnaW5hbFBhcmFtZXRlcnMiO047czoxODoiY29tcHV0ZWRNaWRkbGV3YXJlIjtOO3M6ODoiY29tcGlsZWQiO0M6Mzk6IlN5bWZvbnlcQ29tcG9uZW50XFJvdXRpbmdcQ29tcGlsZWRSb3V0ZSI6MjUzOnthOjg6e3M6NDoidmFycyI7YTowOnt9czoxMToicGF0aF9wcmVmaXgiO3M6NzoiL2xvZ291dCI7czoxMDoicGF0aF9yZWdleCI7czoxNDoiI14vbG9nb3V0JCNzRHUiO3M6MTE6InBhdGhfdG9rZW5zIjthOjE6e2k6MDthOjI6e2k6MDtzOjQ6InRleHQiO2k6MTtzOjc6Ii9sb2dvdXQiO319czo5OiJwYXRoX3ZhcnMiO2E6MDp7fXM6MTA6Imhvc3RfcmVnZXgiO047czoxMToiaG9zdF90b2tlbnMiO2E6MDp7fXM6OToiaG9zdF92YXJzIjthOjA6e319fX1zOjg6InJlZ2lzdGVyIjtPOjI0OiJJbGx1bWluYXRlXFJvdXRpbmdcUm91dGUiOjEyOntzOjM6InVyaSI7czo4OiJyZWdpc3RlciI7czo3OiJtZXRob2RzIjthOjE6e2k6MDtzOjQ6IlBPU1QiO31zOjY6ImFjdGlvbiI7YTo2OntzOjEwOiJtaWRkbGV3YXJlIjthOjE6e2k6MDtzOjM6IndlYiI7fXM6NDoidXNlcyI7czo1MzoiQXBwXEh0dHBcQ29udHJvbGxlcnNcQXV0aFxSZWdpc3RlckNvbnRyb2xsZXJAcmVnaXN0ZXIiO3M6MTA6ImNvbnRyb2xsZXIiO3M6NTM6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEF1dGhcUmVnaXN0ZXJDb250cm9sbGVyQHJlZ2lzdGVyIjtzOjk6Im5hbWVzcGFjZSI7czoyMDoiQXBwXEh0dHBcQ29udHJvbGxlcnMiO3M6NjoicHJlZml4IjtOO3M6NToid2hlcmUiO2E6MDp7fX1zOjEwOiJpc0ZhbGxiYWNrIjtiOjA7czoxMDoiY29udHJvbGxlciI7TjtzOjg6ImRlZmF1bHRzIjthOjA6e31zOjY6IndoZXJlcyI7YTowOnt9czoxMDoicGFyYW1ldGVycyI7TjtzOjE0OiJwYXJhbWV0ZXJOYW1lcyI7TjtzOjIxOiIAKgBvcmlnaW5hbFBhcmFtZXRlcnMiO047czoxODoiY29tcHV0ZWRNaWRkbGV3YXJlIjtOO3M6ODoiY29tcGlsZWQiO0M6Mzk6IlN5bWZvbnlcQ29tcG9uZW50XFJvdXRpbmdcQ29tcGlsZWRSb3V0ZSI6MjU5OnthOjg6e3M6NDoidmFycyI7YTowOnt9czoxMToicGF0aF9wcmVmaXgiO3M6OToiL3JlZ2lzdGVyIjtzOjEwOiJwYXRoX3JlZ2V4IjtzOjE2OiIjXi9yZWdpc3RlciQjc0R1IjtzOjExOiJwYXRoX3Rva2VucyI7YToxOntpOjA7YToyOntpOjA7czo0OiJ0ZXh0IjtpOjE7czo5OiIvcmVnaXN0ZXIiO319czo5OiJwYXRoX3ZhcnMiO2E6MDp7fXM6MTA6Imhvc3RfcmVnZXgiO047czoxMToiaG9zdF90b2tlbnMiO2E6MDp7fXM6OToiaG9zdF92YXJzIjthOjA6e319fX1zOjE0OiJwYXNzd29yZC9lbWFpbCI7TzoyNDoiSWxsdW1pbmF0ZVxSb3V0aW5nXFJvdXRlIjoxMjp7czozOiJ1cmkiO3M6MTQ6InBhc3N3b3JkL2VtYWlsIjtzOjc6Im1ldGhvZHMiO2E6MTp7aTowO3M6NDoiUE9TVCI7fXM6NjoiYWN0aW9uIjthOjc6e3M6MTA6Im1pZGRsZXdhcmUiO2E6MTp7aTowO3M6Mzoid2ViIjt9czo0OiJ1c2VzIjtzOjY5OiJBcHBcSHR0cFxDb250cm9sbGVyc1xBdXRoXEZvcmdvdFBhc3N3b3JkQ29udHJvbGxlckBzZW5kUmVzZXRMaW5rRW1haWwiO3M6MTA6ImNvbnRyb2xsZXIiO3M6Njk6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEF1dGhcRm9yZ290UGFzc3dvcmRDb250cm9sbGVyQHNlbmRSZXNldExpbmtFbWFpbCI7czo5OiJuYW1lc3BhY2UiO3M6MjA6IkFwcFxIdHRwXENvbnRyb2xsZXJzIjtzOjY6InByZWZpeCI7TjtzOjU6IndoZXJlIjthOjA6e31zOjI6ImFzIjtzOjE0OiJwYXNzd29yZC5lbWFpbCI7fXM6MTA6ImlzRmFsbGJhY2siO2I6MDtzOjEwOiJjb250cm9sbGVyIjtOO3M6ODoiZGVmYXVsdHMiO2E6MDp7fXM6Njoid2hlcmVzIjthOjA6e31zOjEwOiJwYXJhbWV0ZXJzIjtOO3M6MTQ6InBhcmFtZXRlck5hbWVzIjtOO3M6MjE6IgAqAG9yaWdpbmFsUGFyYW1ldGVycyI7TjtzOjE4OiJjb21wdXRlZE1pZGRsZXdhcmUiO047czo4OiJjb21waWxlZCI7QzozOToiU3ltZm9ueVxDb21wb25lbnRcUm91dGluZ1xDb21waWxlZFJvdXRlIjoyNzk6e2E6ODp7czo0OiJ2YXJzIjthOjA6e31zOjExOiJwYXRoX3ByZWZpeCI7czoxNToiL3Bhc3N3b3JkL2VtYWlsIjtzOjEwOiJwYXRoX3JlZ2V4IjtzOjIyOiIjXi9wYXNzd29yZC9lbWFpbCQjc0R1IjtzOjExOiJwYXRoX3Rva2VucyI7YToxOntpOjA7YToyOntpOjA7czo0OiJ0ZXh0IjtpOjE7czoxNToiL3Bhc3N3b3JkL2VtYWlsIjt9fXM6OToicGF0aF92YXJzIjthOjA6e31zOjEwOiJob3N0X3JlZ2V4IjtOO3M6MTE6Imhvc3RfdG9rZW5zIjthOjA6e31zOjk6Imhvc3RfdmFycyI7YTowOnt9fX19czoxNDoicGFzc3dvcmQvcmVzZXQiO086MjQ6IklsbHVtaW5hdGVcUm91dGluZ1xSb3V0ZSI6MTI6e3M6MzoidXJpIjtzOjE0OiJwYXNzd29yZC9yZXNldCI7czo3OiJtZXRob2RzIjthOjE6e2k6MDtzOjQ6IlBPU1QiO31zOjY6ImFjdGlvbiI7YTo3OntzOjEwOiJtaWRkbGV3YXJlIjthOjE6e2k6MDtzOjM6IndlYiI7fXM6NDoidXNlcyI7czo1NToiQXBwXEh0dHBcQ29udHJvbGxlcnNcQXV0aFxSZXNldFBhc3N3b3JkQ29udHJvbGxlckByZXNldCI7czoxMDoiY29udHJvbGxlciI7czo1NToiQXBwXEh0dHBcQ29udHJvbGxlcnNcQXV0aFxSZXNldFBhc3N3b3JkQ29udHJvbGxlckByZXNldCI7czo5OiJuYW1lc3BhY2UiO3M6MjA6IkFwcFxIdHRwXENvbnRyb2xsZXJzIjtzOjY6InByZWZpeCI7TjtzOjU6IndoZXJlIjthOjA6e31zOjI6ImFzIjtzOjE1OiJwYXNzd29yZC51cGRhdGUiO31zOjEwOiJpc0ZhbGxiYWNrIjtiOjA7czoxMDoiY29udHJvbGxlciI7TjtzOjg6ImRlZmF1bHRzIjthOjA6e31zOjY6IndoZXJlcyI7YTowOnt9czoxMDoicGFyYW1ldGVycyI7TjtzOjE0OiJwYXJhbWV0ZXJOYW1lcyI7TjtzOjIxOiIAKgBvcmlnaW5hbFBhcmFtZXRlcnMiO047czoxODoiY29tcHV0ZWRNaWRkbGV3YXJlIjtOO3M6ODoiY29tcGlsZWQiO0M6Mzk6IlN5bWZvbnlcQ29tcG9uZW50XFJvdXRpbmdcQ29tcGlsZWRSb3V0ZSI6Mjc5OnthOjg6e3M6NDoidmFycyI7YTowOnt9czoxMToicGF0aF9wcmVmaXgiO3M6MTU6Ii9wYXNzd29yZC9yZXNldCI7czoxMDoicGF0aF9yZWdleCI7czoyMjoiI14vcGFzc3dvcmQvcmVzZXQkI3NEdSI7czoxMToicGF0aF90b2tlbnMiO2E6MTp7aTowO2E6Mjp7aTowO3M6NDoidGV4dCI7aToxO3M6MTU6Ii9wYXNzd29yZC9yZXNldCI7fX1zOjk6InBhdGhfdmFycyI7YTowOnt9czoxMDoiaG9zdF9yZWdleCI7TjtzOjExOiJob3N0X3Rva2VucyI7YTowOnt9czo5OiJob3N0X3ZhcnMiO2E6MDp7fX19fXM6MTY6InBhc3N3b3JkL2NvbmZpcm0iO086MjQ6IklsbHVtaW5hdGVcUm91dGluZ1xSb3V0ZSI6MTI6e3M6MzoidXJpIjtzOjE2OiJwYXNzd29yZC9jb25maXJtIjtzOjc6Im1ldGhvZHMiO2E6MTp7aTowO3M6NDoiUE9TVCI7fXM6NjoiYWN0aW9uIjthOjY6e3M6MTA6Im1pZGRsZXdhcmUiO2E6MTp7aTowO3M6Mzoid2ViIjt9czo0OiJ1c2VzIjtzOjU5OiJBcHBcSHR0cFxDb250cm9sbGVyc1xBdXRoXENvbmZpcm1QYXNzd29yZENvbnRyb2xsZXJAY29uZmlybSI7czoxMDoiY29udHJvbGxlciI7czo1OToiQXBwXEh0dHBcQ29udHJvbGxlcnNcQXV0aFxDb25maXJtUGFzc3dvcmRDb250cm9sbGVyQGNvbmZpcm0iO3M6OToibmFtZXNwYWNlIjtzOjIwOiJBcHBcSHR0cFxDb250cm9sbGVycyI7czo2OiJwcmVmaXgiO047czo1OiJ3aGVyZSI7YTowOnt9fXM6MTA6ImlzRmFsbGJhY2siO2I6MDtzOjEwOiJjb250cm9sbGVyIjtOO3M6ODoiZGVmYXVsdHMiO2E6MDp7fXM6Njoid2hlcmVzIjthOjA6e31zOjEwOiJwYXJhbWV0ZXJzIjtOO3M6MTQ6InBhcmFtZXRlck5hbWVzIjtOO3M6MjE6IgAqAG9yaWdpbmFsUGFyYW1ldGVycyI7TjtzOjE4OiJjb21wdXRlZE1pZGRsZXdhcmUiO047czo4OiJjb21waWxlZCI7QzozOToiU3ltZm9ueVxDb21wb25lbnRcUm91dGluZ1xDb21waWxlZFJvdXRlIjoyODU6e2E6ODp7czo0OiJ2YXJzIjthOjA6e31zOjExOiJwYXRoX3ByZWZpeCI7czoxNzoiL3Bhc3N3b3JkL2NvbmZpcm0iO3M6MTA6InBhdGhfcmVnZXgiO3M6MjQ6IiNeL3Bhc3N3b3JkL2NvbmZpcm0kI3NEdSI7czoxMToicGF0aF90b2tlbnMiO2E6MTp7aTowO2E6Mjp7aTowO3M6NDoidGV4dCI7aToxO3M6MTc6Ii9wYXNzd29yZC9jb25maXJtIjt9fXM6OToicGF0aF92YXJzIjthOjA6e31zOjEwOiJob3N0X3JlZ2V4IjtOO3M6MTE6Imhvc3RfdG9rZW5zIjthOjA6e31zOjk6Imhvc3RfdmFycyI7YTowOnt9fX19czo4OiJBamF4U2VuZCI7TzoyNDoiSWxsdW1pbmF0ZVxSb3V0aW5nXFJvdXRlIjoxMjp7czozOiJ1cmkiO3M6ODoiQWpheFNlbmQiO3M6NzoibWV0aG9kcyI7YToxOntpOjA7czo0OiJQT1NUIjt9czo2OiJhY3Rpb24iO2E6Njp7czoxMDoibWlkZGxld2FyZSI7YToxOntpOjA7czozOiJ3ZWIiO31zOjQ6InVzZXMiO3M6NTE6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEFqYXhDb250cm9sbGVyQGFqYXhSZXF1ZXN0UG9zdCI7czoxMDoiY29udHJvbGxlciI7czo1MToiQXBwXEh0dHBcQ29udHJvbGxlcnNcQWpheENvbnRyb2xsZXJAYWpheFJlcXVlc3RQb3N0IjtzOjk6Im5hbWVzcGFjZSI7czoyMDoiQXBwXEh0dHBcQ29udHJvbGxlcnMiO3M6NjoicHJlZml4IjtOO3M6NToid2hlcmUiO2E6MDp7fX1zOjEwOiJpc0ZhbGxiYWNrIjtiOjA7czoxMDoiY29udHJvbGxlciI7TjtzOjg6ImRlZmF1bHRzIjthOjA6e31zOjY6IndoZXJlcyI7YTowOnt9czoxMDoicGFyYW1ldGVycyI7TjtzOjE0OiJwYXJhbWV0ZXJOYW1lcyI7TjtzOjIxOiIAKgBvcmlnaW5hbFBhcmFtZXRlcnMiO047czoxODoiY29tcHV0ZWRNaWRkbGV3YXJlIjtOO3M6ODoiY29tcGlsZWQiO0M6Mzk6IlN5bWZvbnlcQ29tcG9uZW50XFJvdXRpbmdcQ29tcGlsZWRSb3V0ZSI6MjU5OnthOjg6e3M6NDoidmFycyI7YTowOnt9czoxMToicGF0aF9wcmVmaXgiO3M6OToiL0FqYXhTZW5kIjtzOjEwOiJwYXRoX3JlZ2V4IjtzOjE2OiIjXi9BamF4U2VuZCQjc0R1IjtzOjExOiJwYXRoX3Rva2VucyI7YToxOntpOjA7YToyOntpOjA7czo0OiJ0ZXh0IjtpOjE7czo5OiIvQWpheFNlbmQiO319czo5OiJwYXRoX3ZhcnMiO2E6MDp7fXM6MTA6Imhvc3RfcmVnZXgiO047czoxMToiaG9zdF90b2tlbnMiO2E6MDp7fXM6OToiaG9zdF92YXJzIjthOjA6e319fX19fXM6MTI6IgAqAGFsbFJvdXRlcyI7YToxODp7czoxMjoiSEVBRGFwaS91c2VyIjtyOjQ7czo5OiJIRUFEbG9naW4iO3I6Mzk7czo5OiJQT1NUbG9naW4iO3I6NDM5O3M6MTA6IlBPU1Rsb2dvdXQiO3I6NDcyO3M6MTI6IkhFQURyZWdpc3RlciI7cjo3NDtzOjEyOiJQT1NUcmVnaXN0ZXIiO3I6NTA2O3M6MTg6IkhFQURwYXNzd29yZC9yZXNldCI7cjoxMDk7czoxODoiUE9TVHBhc3N3b3JkL2VtYWlsIjtyOjUzOTtzOjI2OiJIRUFEcGFzc3dvcmQvcmVzZXQve3Rva2VufSI7cjoxNDQ7czoxODoiUE9TVHBhc3N3b3JkL3Jlc2V0IjtyOjU3MztzOjIwOiJIRUFEcGFzc3dvcmQvY29uZmlybSI7cjoxODc7czoyMDoiUE9TVHBhc3N3b3JkL2NvbmZpcm0iO3I6NjA3O3M6NToiSEVBRC8iO3I6MjIyO3M6MTE6IkhFQURBYm91dFVzIjtyOjI1NztzOjEyOiJQT1NUQWpheFNlbmQiO3I6NjQwO3M6MTU6IkhFQURTdGF0dXNDaGVjayI7cjoyOTI7czoyNjoiSEVBRFN0YXR1c0ZldGNoL3tpZH0ve21vYn0iO3I6MzI2O3M6MjM6IkhFQURTZW5kQ29kZS97aWR9L3ttb2J9IjtyOjM3Njt9czoxMToiACoAbmFtZUxpc3QiO2E6MTA6e3M6NToibG9naW4iO3I6Mzk7czo2OiJsb2dvdXQiO3I6NDcyO3M6ODoicmVnaXN0ZXIiO3I6NzQ7czoxNjoicGFzc3dvcmQucmVxdWVzdCI7cjoxMDk7czoxNDoicGFzc3dvcmQuZW1haWwiO3I6NTM5O3M6MTQ6InBhc3N3b3JkLnJlc2V0IjtyOjE0NDtzOjE1OiJwYXNzd29yZC51cGRhdGUiO3I6NTczO3M6MTY6InBhc3N3b3JkLmNvbmZpcm0iO3I6MTg3O3M6NDoiaG9tZSI7cjoyMjI7czo1OiJhYm91dCI7cjoyNTc7fXM6MTM6IgAqAGFjdGlvbkxpc3QiO2E6MTg6e3M6NDg6IkFwcFxIdHRwXENvbnRyb2xsZXJzXFVzZXJDb250cm9sbGVyQEF1dGhSb3V0ZUFQSSI7cjo0O3M6NTU6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEF1dGhcTG9naW5Db250cm9sbGVyQHNob3dMb2dpbkZvcm0iO3I6Mzk7czo0NzoiQXBwXEh0dHBcQ29udHJvbGxlcnNcQXV0aFxMb2dpbkNvbnRyb2xsZXJAbG9naW4iO3I6NDM5O3M6NDg6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEF1dGhcTG9naW5Db250cm9sbGVyQGxvZ291dCI7cjo0NzI7czo2NToiQXBwXEh0dHBcQ29udHJvbGxlcnNcQXV0aFxSZWdpc3RlckNvbnRyb2xsZXJAc2hvd1JlZ2lzdHJhdGlvbkZvcm0iO3I6NzQ7czo1MzoiQXBwXEh0dHBcQ29udHJvbGxlcnNcQXV0aFxSZWdpc3RlckNvbnRyb2xsZXJAcmVnaXN0ZXIiO3I6NTA2O3M6NzA6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEF1dGhcRm9yZ290UGFzc3dvcmRDb250cm9sbGVyQHNob3dMaW5rUmVxdWVzdEZvcm0iO3I6MTA5O3M6Njk6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEF1dGhcRm9yZ290UGFzc3dvcmRDb250cm9sbGVyQHNlbmRSZXNldExpbmtFbWFpbCI7cjo1Mzk7czo2MzoiQXBwXEh0dHBcQ29udHJvbGxlcnNcQXV0aFxSZXNldFBhc3N3b3JkQ29udHJvbGxlckBzaG93UmVzZXRGb3JtIjtyOjE0NDtzOjU1OiJBcHBcSHR0cFxDb250cm9sbGVyc1xBdXRoXFJlc2V0UGFzc3dvcmRDb250cm9sbGVyQHJlc2V0IjtyOjU3MztzOjY3OiJBcHBcSHR0cFxDb250cm9sbGVyc1xBdXRoXENvbmZpcm1QYXNzd29yZENvbnRyb2xsZXJAc2hvd0NvbmZpcm1Gb3JtIjtyOjE4NztzOjU5OiJBcHBcSHR0cFxDb250cm9sbGVyc1xBdXRoXENvbmZpcm1QYXNzd29yZENvbnRyb2xsZXJAY29uZmlybSI7cjo2MDc7czo0MDoiQXBwXEh0dHBcQ29udHJvbGxlcnNcQWxvQ29udHJvbGxlckBpbmRleCI7cjoyMjI7czo0MDoiQXBwXEh0dHBcQ29udHJvbGxlcnNcQWxvQ29udHJvbGxlckBhYm91dCI7cjoyNTc7czo1MToiQXBwXEh0dHBcQ29udHJvbGxlcnNcQWpheENvbnRyb2xsZXJAYWpheFJlcXVlc3RQb3N0IjtyOjY0MDtzOjQ0OiJBcHBcSHR0cFxDb250cm9sbGVyc1xTdGF0dXNDb250cm9sbGVyQFN0YXR1cyI7cjoyOTI7czo0NzoiQXBwXEh0dHBcQ29udHJvbGxlcnNcU3RhdHVzQ29udHJvbGxlckBzdGF0ZmV0Y2giO3I6MzI2O3M6NDM6IkFwcFxIdHRwXENvbnRyb2xsZXJzXFNtc0NvbnRyb2xsZXJAc2VuZGNvZGUiO3I6Mzc2O319'))
);