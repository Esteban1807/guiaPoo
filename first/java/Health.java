
public class Health extends Discounts {

    private final float health = 0.04f;

    @Override
    public float discounts(int salary) {
        return salary * health;
    }
}   