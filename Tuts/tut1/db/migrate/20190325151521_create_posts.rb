class CreatePosts < ActiveRecord::Migration[5.2]
  def change
    create_table :posts do |t|
      t.integer :id
      t.text :title
      t.text :body

      t.timestamps
    end
  end
end
