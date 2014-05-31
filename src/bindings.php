<?php

const INTERFACES = "Cianflone\\Again\\Repositories\\";
const ELOQUENT = "Cianflone\\Again\\Repositories\\Eloquent\\";

App::bind(INTERFACES."UserRepository", ELOQUENT. "EloquentUserRepository");
