    CREATE TABLE idoso (
        id SERIAL PRIMARY KEY,
        nome VARCHAR(100),
        email VARCHAR(100),
        telefone VARCHAR(100),
        cpf VARCHAR(15)
    );--tabela do guilherme 

    CREATE TABLE noticias ( 
    id SERIAL PRIMARY KEY, 
    titulo VARCHAR(255), 
    conteudo TEXT, 
    explicacao TEXT,
    status VARCHAR(10) CHECK (status IN ('FATO', 'FAKE'))
    ); --tabela da nalu

    CREATE TABLE licao (
    id SERIAL PRIMARY KEY,              
    nivel INTEGER NOT NULL,             
    xp INTEGER DEFAULT 0,    
    nome VARCHAR(255)                    
    );--tabela da bruna

    CREATE TABLE Links (
    id SERIAL PRIMARY KEY,
    link TEXT,
    veracidade BOOLEAN,
    data DATE
    );--tabela do felipe
    --
    -- PostgreSQL database dump
    --


    -- Dumped from database version 14.15 (Ubuntu 14.15-0ubuntu0.22.04.1)
    -- Dumped by pg_dump version 16.13 (Ubuntu 16.13-0ubuntu0.24.04.1)

    -- Started on 2026-03-23 07:57:53 -04

    SET statement_timeout = 0;
    SET lock_timeout = 0;
    SET idle_in_transaction_session_timeout = 0;
    SET client_encoding = 'UTF8';
    SET standard_conforming_strings = on;
    SELECT pg_catalog.set_config('search_path', '', false);
    SET check_function_bodies = false;
    SET xmloption = content;
    SET client_min_messages = warning;
    SET row_security = off;

    --
    -- TOC entry 4 (class 2615 OID 2200)
    -- Name: public; Type: SCHEMA; Schema: -; Owner: postgres
    --

    -- *not* creating schema, since initdb creates it


    ALTER SCHEMA public OWNER TO postgres;

    SET default_tablespace = '';

    SET default_table_access_method = heap;


    CREATE TABLE public.idoso (
        id integer NOT NULL,
        nome character varying(100),
        email character varying(100),
        telefone character varying(100),
        cpf character varying(15)
    );


    ALTER TABLE public.idoso OWNER TO postgres;

    --
    -- TOC entry 210 (class 1259 OID 21552)
    -- Name: cliente_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
    --

    CREATE SEQUENCE public.idoso_id_seq
        AS integer
        START WITH 1
        INCREMENT BY 1
        NO MINVALUE
        NO MAXVALUE
        CACHE 1;


    ALTER SEQUENCE public.idoso_id_seq OWNER TO postgres;

    --
    -- TOC entry 3359 (class 0 OID 0)
    -- Dependencies: 210
    -- Name: idoso_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
    --

    ALTER SEQUENCE public.idoso_id_seq OWNED BY public.idoso.id;


    --
    -- TOC entry 3209 (class 2604 OID 21553)
    -- Name: idoso id; Type: DEFAULT; Schema: public; Owner: postgres
    --

    ALTER TABLE ONLY public.idoso ALTER COLUMN id SET DEFAULT nextval('public.idoso_id_seq'::regclass);


    --
    -- TOC entry 3351 (class 0 OID 21549)
    -- Dependencies: 209
    -- Data for Name: idoso; Type: TABLE DATA; Schema: public; Owner: postgres
    --

    INSERT INTO public.idoso VALUES (1, 'Abilio', 'abilio@gmail.com', '9999-8888', NULL);
    INSERT INTO public.idoso VALUES (3, 'Carla', 'carla@gmail.com', '123', '1234');
    INSERT INTO public.idoso VALUES (4, 'Douglas', 'douglas@gmail.com', '12345', '67890');
    INSERT INTO public.idoso VALUES (2, 'Bernardinho', 'bernardinho@gmail.com', '9999-1234', '123456');


    --
    -- TOC entry 3360 (class 0 OID 0)
    -- Dependencies: 210
    -- Name: cliente_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
    --

    SELECT pg_catalog.setval('public.idoso_id_seq', 6, true);


    --
    -- TOC entry 3211 (class 2606 OID 21555)
    -- Name: usuario idoso_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
    --

    ALTER TABLE ONLY public.idoso
        ADD CONSTRAINT idoso_pkey PRIMARY KEY (id);


    --
    -- TOC entry 3358 (class 0 OID 0)
    -- Dependencies: 4
    -- Name: SCHEMA public; Type: ACL; Schema: -; Owner: postgres
    --

    REVOKE USAGE ON SCHEMA public FROM PUBLIC;
    GRANT ALL ON SCHEMA public TO PUBLIC;


    -- Completed on 2026-03-23 07:57:53 -04

    --
    -- PostgreSQL database dump complete
    --

