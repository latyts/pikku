CREATE TABLE IF NOT EXISTS posts (
    post_id serial PRIMARY KEY,
    title VARCHAR(500) NOT NULL,
    contents TEXT NOT NULL,
    created_at TIMESTAMPTZ NOT NULL DEFAULT NOW()
)
