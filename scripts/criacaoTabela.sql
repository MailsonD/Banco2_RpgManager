﻿CREATE TABLE regiao(
	id SERIAL PRIMARY KEY,
	nome VARCHAR(50) NOT NULL,
	geom GEOMETRY NOT NULL
)