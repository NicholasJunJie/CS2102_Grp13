--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.4
-- Dumped by pg_dump version 9.5.4

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: project; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA project;


ALTER SCHEMA project OWNER TO postgres;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = project, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: account; Type: TABLE; Schema: project; Owner: postgres
--

CREATE TABLE account (
    password character varying(20) NOT NULL,
    first_name character varying(256) NOT NULL,
    last_name character varying(256) NOT NULL,
    email character varying(256) NOT NULL,
    contact_num integer NOT NULL,
    account_type character varying(20) DEFAULT 'customer'::character varying NOT NULL
);


ALTER TABLE account OWNER TO postgres;

--
-- Name: TABLE account; Type: COMMENT; Schema: project; Owner: postgres
--

COMMENT ON TABLE account IS 'Standard account schema';


--
-- Name: COLUMN account.password; Type: COMMENT; Schema: project; Owner: postgres
--

COMMENT ON COLUMN account.password IS 'password';


--
-- Name: COLUMN account.first_name; Type: COMMENT; Schema: project; Owner: postgres
--

COMMENT ON COLUMN account.first_name IS 'first name';


--
-- Name: COLUMN account.last_name; Type: COMMENT; Schema: project; Owner: postgres
--

COMMENT ON COLUMN account.last_name IS 'last name';


--
-- Name: COLUMN account.email; Type: COMMENT; Schema: project; Owner: postgres
--

COMMENT ON COLUMN account.email IS 'email address';


--
-- Name: COLUMN account.contact_num; Type: COMMENT; Schema: project; Owner: postgres
--

COMMENT ON COLUMN account.contact_num IS '8 digit contact number';


--
-- Name: COLUMN account.account_type; Type: COMMENT; Schema: project; Owner: postgres
--

COMMENT ON COLUMN account.account_type IS 'either customer/administrator';


--
-- Name: task; Type: TABLE; Schema: project; Owner: postgres
--

CREATE TABLE task (
    task_id integer NOT NULL,
    task_name character varying(256) NOT NULL,
    task_description character varying(5000) NOT NULL,
    task_type character varying(1000) NOT NULL,
    amount character varying(256) NOT NULL,
    created_by character varying(256) NOT NULL
);


ALTER TABLE task OWNER TO postgres;

--
-- Name: TABLE task; Type: COMMENT; Schema: project; Owner: postgres
--

COMMENT ON TABLE task IS 'Tasks with description';


--
-- Name: COLUMN task.task_id; Type: COMMENT; Schema: project; Owner: postgres
--

COMMENT ON COLUMN task.task_id IS 'Self-generated ID';


--
-- Name: COLUMN task.task_name; Type: COMMENT; Schema: project; Owner: postgres
--

COMMENT ON COLUMN task.task_name IS 'Name of task';


--
-- Name: COLUMN task.task_description; Type: COMMENT; Schema: project; Owner: postgres
--

COMMENT ON COLUMN task.task_description IS 'Description of Task';


--
-- Name: COLUMN task.task_type; Type: COMMENT; Schema: project; Owner: postgres
--

COMMENT ON COLUMN task.task_type IS 'Reference to category table (categoryID) ';


--
-- Name: COLUMN task.amount; Type: COMMENT; Schema: project; Owner: postgres
--

COMMENT ON COLUMN task.amount IS 'amount to pay';


--
-- Name: COLUMN task.created_by; Type: COMMENT; Schema: project; Owner: postgres
--

COMMENT ON COLUMN task.created_by IS 'references account email';


--
-- Name: task_taskID_seq; Type: SEQUENCE; Schema: project; Owner: postgres
--

CREATE SEQUENCE "task_taskID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE "task_taskID_seq" OWNER TO postgres;

--
-- Name: task_taskID_seq; Type: SEQUENCE OWNED BY; Schema: project; Owner: postgres
--

ALTER SEQUENCE "task_taskID_seq" OWNED BY task.task_id;


--
-- Name: taskcategory; Type: TABLE; Schema: project; Owner: postgres
--

CREATE TABLE taskcategory (
    category_id integer NOT NULL,
    category character varying(256) NOT NULL
);


ALTER TABLE taskcategory OWNER TO postgres;

--
-- Name: TABLE taskcategory; Type: COMMENT; Schema: project; Owner: postgres
--

COMMENT ON TABLE taskcategory IS 'Category of Tasks';


--
-- Name: COLUMN taskcategory.category_id; Type: COMMENT; Schema: project; Owner: postgres
--

COMMENT ON COLUMN taskcategory.category_id IS 'Self-generated ID';


--
-- Name: COLUMN taskcategory.category; Type: COMMENT; Schema: project; Owner: postgres
--

COMMENT ON COLUMN taskcategory.category IS 'Catergory type';


--
-- Name: taskcategory_categoryID_seq; Type: SEQUENCE; Schema: project; Owner: postgres
--

CREATE SEQUENCE "taskcategory_categoryID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE "taskcategory_categoryID_seq" OWNER TO postgres;

--
-- Name: taskcategory_categoryID_seq; Type: SEQUENCE OWNED BY; Schema: project; Owner: postgres
--

ALTER SEQUENCE "taskcategory_categoryID_seq" OWNED BY taskcategory.category_id;


--
-- Name: transaction; Type: TABLE; Schema: project; Owner: postgres
--

CREATE TABLE transaction (
    transaction_id integer NOT NULL,
    account_id character varying(1000) NOT NULL,
    task_id character varying(1000) NOT NULL,
    date date NOT NULL
);


ALTER TABLE transaction OWNER TO postgres;

--
-- Name: TABLE transaction; Type: COMMENT; Schema: project; Owner: postgres
--

COMMENT ON TABLE transaction IS 'Transaction table';


--
-- Name: COLUMN transaction.account_id; Type: COMMENT; Schema: project; Owner: postgres
--

COMMENT ON COLUMN transaction.account_id IS 'references account ID';


--
-- Name: COLUMN transaction.task_id; Type: COMMENT; Schema: project; Owner: postgres
--

COMMENT ON COLUMN transaction.task_id IS 'references task ID';


--
-- Name: transaction_transactionID_seq; Type: SEQUENCE; Schema: project; Owner: postgres
--

CREATE SEQUENCE "transaction_transactionID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE "transaction_transactionID_seq" OWNER TO postgres;

--
-- Name: transaction_transactionID_seq; Type: SEQUENCE OWNED BY; Schema: project; Owner: postgres
--

ALTER SEQUENCE "transaction_transactionID_seq" OWNED BY transaction.transaction_id;


--
-- Name: task_id; Type: DEFAULT; Schema: project; Owner: postgres
--

ALTER TABLE ONLY task ALTER COLUMN task_id SET DEFAULT nextval('"task_taskID_seq"'::regclass);


--
-- Name: category_id; Type: DEFAULT; Schema: project; Owner: postgres
--

ALTER TABLE ONLY taskcategory ALTER COLUMN category_id SET DEFAULT nextval('"taskcategory_categoryID_seq"'::regclass);


--
-- Name: transaction_id; Type: DEFAULT; Schema: project; Owner: postgres
--

ALTER TABLE ONLY transaction ALTER COLUMN transaction_id SET DEFAULT nextval('"transaction_transactionID_seq"'::regclass);


--
-- Data for Name: account; Type: TABLE DATA; Schema: project; Owner: postgres
--

COPY account (password, first_name, last_name, email, contact_num, account_type) FROM stdin;
1	Joseph	Chan	joseph@gmail.com	91234567	administrator
1	Siow Han	Tan	tsh@gmail.com	93456789	administrator
1	Nicholas	See	nicholas@gmail.com	92345678	administrator
1234	yolo	Tan	edswqrwq@gmail.com	91223456	customer
123	yooooo	eeee	dewfw@gmail.com	91234564	customer
\.


--
-- Data for Name: task; Type: TABLE DATA; Schema: project; Owner: postgres
--

COPY task (task_id, task_name, task_description, task_type, amount, created_by) FROM stdin;
\.


--
-- Name: task_taskID_seq; Type: SEQUENCE SET; Schema: project; Owner: postgres
--

SELECT pg_catalog.setval('"task_taskID_seq"', 1, false);


--
-- Data for Name: taskcategory; Type: TABLE DATA; Schema: project; Owner: postgres
--

COPY taskcategory (category_id, category) FROM stdin;
\.


--
-- Name: taskcategory_categoryID_seq; Type: SEQUENCE SET; Schema: project; Owner: postgres
--

SELECT pg_catalog.setval('"taskcategory_categoryID_seq"', 1, false);


--
-- Data for Name: transaction; Type: TABLE DATA; Schema: project; Owner: postgres
--

COPY transaction (transaction_id, account_id, task_id, date) FROM stdin;
\.


--
-- Name: transaction_transactionID_seq; Type: SEQUENCE SET; Schema: project; Owner: postgres
--

SELECT pg_catalog.setval('"transaction_transactionID_seq"', 1, false);


--
-- Name: account_pkey; Type: CONSTRAINT; Schema: project; Owner: postgres
--

ALTER TABLE ONLY account
    ADD CONSTRAINT account_pkey PRIMARY KEY (email);


--
-- Name: task_pkey; Type: CONSTRAINT; Schema: project; Owner: postgres
--

ALTER TABLE ONLY task
    ADD CONSTRAINT task_pkey PRIMARY KEY (task_id);


--
-- Name: taskcategory_pkey; Type: CONSTRAINT; Schema: project; Owner: postgres
--

ALTER TABLE ONLY taskcategory
    ADD CONSTRAINT taskcategory_pkey PRIMARY KEY (category_id);


--
-- Name: transaction_pkey; Type: CONSTRAINT; Schema: project; Owner: postgres
--

ALTER TABLE ONLY transaction
    ADD CONSTRAINT transaction_pkey PRIMARY KEY (transaction_id);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

