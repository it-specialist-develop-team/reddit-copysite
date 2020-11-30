alter table user_subreddit_links change updated_at updated_at timestamp default current_timestamp();
alter table user_subreddit_links change subreddit_id subreddit_id int not null;